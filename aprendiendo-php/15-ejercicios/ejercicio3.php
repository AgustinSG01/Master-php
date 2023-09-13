<?php

/*
    Ejercicio 3. Programa que compruebe si una variable está vacia, si lo está, rellenarla
    con texto en minuscula y mostrarlo con mayuscula y negrita
*/

function convertEmpty($texto) {
    if (empty($texto)) {
        $texto = "fui rellenado con texto en minuscula";
        return '<h1>'.strtoupper($texto).'</h1>';
    } else return $texto;
}

echo convertEmpty("");