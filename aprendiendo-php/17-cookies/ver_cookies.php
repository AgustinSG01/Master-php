<?php

/*
    Para mostrar el valor de las cookies se utiliza $_COOKIE, una variable superglobal,
    es un array asociativo.
*/

if (isset($_COOKIE['miCookie'])) {
    echo '<h1>' . $_COOKIE['miCookie'] . '</h1>';
} else {
    echo "<h3>No existe la cookie</h3>";
}


if (isset($_COOKIE['oneYear'])) {
    echo '<h1>' . $_COOKIE['oneYear'] . '</h1>';
} else {
    echo "<h3>No existe la cookie</h3>";
}
?>
<a href="crear_cookies.php">Crear cookies</a>
<br />
<a href="borrar_cookies.php">Borrar cookies</a>