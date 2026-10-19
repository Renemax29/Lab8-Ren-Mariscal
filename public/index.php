<?php
// Trae el archivo con la función cargar_estudiante(). once evita cargarlo dos veces.
require_once __DIR__ . '/../lib/estudiante.php';
// Lee estudiante.json y guarda mis datos en una variable.
$est = cargar_estudiante();

# Hace que la hora sea la de Panamá y no la del servidor.
date_default_timezone_set('America/Panama');

/* Termina el PHP y empieza el HTML normal. */
# Atajo de echo: imprime el apellido dentro del título.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 - <?= $est['apellido'] ?></title>
</head>
<body>
    <h1><?= $est['nombre'] . ' ' . $est['apellido'] ?></h1>

    <?php
    // Imprime la versión de PHP con la constante PHP_VERSION.
    echo '<p>Versión de PHP: ' . PHP_VERSION . '</p>';

    # Imprime la fecha. Es parecido a echo pero solo muestra un valor.
    /* d es día, m mes, Y año de 4 cifras, H hora y i minutos. */
    print '<p>Fecha y hora: ' . date('d/m/Y H:i') . '</p>';
    ?>
</body>
</html>