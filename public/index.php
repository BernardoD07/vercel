<?php include 'kardex.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas php</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="content">
    <h1>Calificaciones de materias en ESCOM</h1>

    <div class="info">
        <h2>Informacion general</h2>
        <p><b>Nombre</b>: Luis Bernardo Delgado Acosta</p>
        <p><b>Promedio General</b>: <?php echo $promedio ?> </p>
        <p><b>Materias Aprobadas</b>: <?php echo $Total_aprobadas ?> </p>
        <p><b>Materias Reprobadas</b>: <?php echo $Total_reprobadas ?> </p>
        <p><b>Materias Cursadas</b>: 24 </p>
        <p><b>Materias no cursadas</b>: 21</p>
    </div>

    <div class="kardex">
        <h2>Kardex</h2>
    </div>

    <div class="tablas">
        <div>
            <div class="tabla">
                <table>
                    <caption>Primer Semestre</caption>
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Periodo</th>
                            <th>Forma de Evaluacion</th>
                            <th>Calificacion</th>
                        </tr>
                    </thead>
                    <?php foreach($primer_semestre as $materia){ ?>
                        <tbody>
                            <tr>
                                <td><?php echo $materia['clave']; ?></td>
                                <td><?php echo $materia['nombre']; ?></td>
                                <td><?php echo $materia['fecha']; ?></td>
                                <td><?php echo $materia['periodo']; ?></td>
                                <td><?php echo $materia['formaEvaluacion']; ?></td>
                                <td><?php echo $materia['calificacion']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>

                <h3>Promedio primer semestre: <?php echo $prom_primer_semestre; ?></h3>
            </div>

            <div class="tabla">
                <table>
                    <caption>Segundo Semestre</caption>
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Periodo</th>
                            <th>Forma de Evaluacion</th>
                            <th>Calificacion</th>
                        </tr>
                    </thead>
                    
                    <?php foreach($segundo_semestre as $materia){ ?>
                    <tbody>
                        <tr>
                            <td><?php echo $materia['clave']; ?></td>
                            <td><?php echo $materia['nombre']; ?></td>
                            <td><?php echo $materia['fecha']; ?></td>
                            <td><?php echo $materia['periodo']; ?></td>
                            <td><?php echo $materia['formaEvaluacion']; ?></td>
                            <td><?php echo $materia['calificacion']; ?></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>

                <h3>Promedio segundo semestre: <?php echo $prom_segundo_semestre; ?></h3>
            </div>

            <div class="tabla">
                <table>
                    <caption>Tercer Semestre</caption>
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Periodo</th>
                            <th>Forma de Evaluacion</th>
                            <th>Calificacion</th>
                        </tr>
                    </thead>
                    <?php foreach($tercer_semestre as $materia){ ?>
                        <tbody>
                            <tr>
                                <td><?php echo $materia['clave']; ?></td>
                                <td><?php echo $materia['nombre']; ?></td>
                                <td><?php echo $materia['fecha']; ?></td>
                                <td><?php echo $materia['periodo']; ?></td>
                                <td><?php echo $materia['formaEvaluacion']; ?></td>
                                <td><?php echo $materia['calificacion']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>

                <h3>Promedio del tercer semestre: <?php echo $prom_tercer_semetre; ?></h3>
            </div>
            <div class="tabla">
                <table>
                    <caption>Cuarto Semestre</caption>
                    <thead>
                        <tr>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th>Periodo</th>
                            <th>Forma de Evaluacion</th>
                            <th>Calificacion</th>
                        </tr>
                    </thead>
                    <?php foreach($cuarto_semestre as $materia){ ?>
                        <tbody>
                            <tr>
                                <td><?php echo $materia['clave']; ?></td>
                                <td><?php echo $materia['nombre']; ?></td>
                                <td><?php echo $materia['fecha']; ?></td>
                                <td><?php echo $materia['periodo']; ?></td>
                                <td><?php echo $materia['formaEvaluacion']; ?></td>
                                <td><?php echo $materia['calificacion']; ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>

                <h3>Promedio cuarto semestre: <?php echo $prom_cuarto_semetre ; ?></h3>
            </div>
        </div>
    </div>
    </div>
</body>
</html>