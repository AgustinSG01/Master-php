<?php
/*
    Ejercicio 2. Escribir un programa en PHP que añada valores a un array mientras su longitud
    sea menor a 120 y luego mostrarlo por pantalla
*/

$array = [];

for ($i = 0; count($array) < 120; $i++) {
    $array[] = $i;
}

foreach ($array as $index) {
    echo "<p>$index</p>";
}
