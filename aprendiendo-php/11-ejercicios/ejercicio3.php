<?php

/*
    Ejercicio 3. Escribir un script que imprima en pantalla los cruadrados
    de los primeros 40 numeros naturales utilizando un bucle WHILE
*/

$numero = 0;

while ($numero <= 40) {
    echo ($numero * $numero)."<br/>";
    $numero++;
}