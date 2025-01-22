const { exec } = require('child_process');
const http = require('http');
const path = require('path');

const server = http.createServer((req, res) => {
  const filePath = path.join(__dirname, 'public', req.url === '/' ? 'index.php' : req.url);

  exec(`php-cgi ${filePath}`, (err, stdout, stderr) => {
    if (err) {
      res.writeHead(500, { 'Content-Type': 'text/plain' });
      res.end('Error ejecutando PHP: ' + stderr);
      return;
    }
    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.end(stdout);
  });
});

const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
  console.log(`Servidor corriendo en http://localhost:${PORT}`);
});
