<?php

/*
    Ejercicio 5. Crear un array con el contenido de la tabla:
    ACCION | AVENTURA  | DEPORTES
    GTA    | ASSASSINS | FIFA 19
    COD    | CRASH     | PES 19
    PUBG   | PRINCE OF | MOTO GP 19
           | PERSIA    | 
    
    Cada columna debe ir en un fichero separado utilizando includes      
*/

$tabla = [
    'ACCION' => ['GTA', 'COD', 'PUBG'],
    'AVENTURA' => ['ASSASSINS', 'CRASH', 'PRINCE OF PERSIA'],
    'DEPORTES' => ['FIFA 19', 'PES 19', 'MOTO GP 19']
];

$categorias = array_keys($tabla);

?>

<table border="1">
    <?php require './ejercicio5/encabezado.php' ?>
    <?php require './ejercicio5/primera.php' ?>
    <?php require './ejercicio5/segunda.php' ?>
    <?php require './ejercicio5/tercera.php' ?>
</table>