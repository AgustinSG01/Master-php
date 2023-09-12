<?php
/*
Ejercicio 2. Escribir un script en PHP que nos muestre en pantalla 
todos los numeros pares que hay del 1 al 100 
 */

for ($numero = 1; $numero <= 100; $numero++) {
    if ($numero % 2 === 0) {
        echo "<p>$numero</p>";
    }
}
