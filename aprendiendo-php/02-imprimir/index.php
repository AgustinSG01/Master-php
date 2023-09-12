<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Imprimir por pantalla - master php</title>

</head>

<body>
    <?='Parrafo creado con atajo de echo php'?>
    <h1>Master en PHP</h1>
    <?php
    echo '<h3>Listado de videojuegos</h3>';
    echo '<ul>'
        . '<li>GTA</li>'
        . '<li>Fifa</li>'
        . '<li>Mario</li>'
        . '</ul>';

    echo '<p>Esta es toda' . ' la ' . 'lista de videojuegos</p>';

    ?>
</body>

</html>