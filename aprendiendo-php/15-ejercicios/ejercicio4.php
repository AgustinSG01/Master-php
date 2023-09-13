<?php

/*
    Ejercicio 4. Crea un script en PHP que tenga 4 variables: array, string, int y boolean
    y que imprima un mensaje segun el tipo de variable que sea.
*/

$array = [1, 2, 3];
$string = 'Hola';
$int = 10;
$boolean = true;

function verificarTipo($variable)
{
    $type = gettype($variable);

    switch ($type) {
        case 'array':
            return 'La variable ingresada es un array';
            break;
        case 'string':
            return 'La variable ingresada es un string';
            break;
        case 'integer':
            return 'La variable ingresada es un integer';
            break;
        case 'boolean':
            return 'La variable ingresada es un booleano';
            break;
        default:
            return 'No reconozco el tipo de variable ingresada';
    }
}

echo verificarTipo($boolean);
