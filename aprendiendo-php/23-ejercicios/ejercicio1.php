<?php

/*
    Ejercicio 1. Crear una sesion que aumente su valor en uno o disminuya en uno
    en funcion de si el parametro get counter esta a uno o a cero
*/

session_start();

if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}

if (isset($_GET['counter'])) {
    $counter = (int) $_GET['counter'];
    if ($counter === 1) {
        $_SESSION['numero']++;
    } else {
        $_SESSION['numero']--;
    }
}

echo '<h1>' . $_SESSION['numero'] . '</h1>';

?>
<a href="ejercicio1.php?counter=1">Aumentar valor</a><br />
<a href="ejercicio1.php?counter=0">Disminuir valor</a>