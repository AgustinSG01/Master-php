<?php

/*
    Ejercicio 1. Crear un programa en PHP que reciba un array de 8 numeros entero
    y realice lo siguiente: 
    - Recorrerlo y mostrarlo
    - Ordenarlo y mostrarlo
    - Mostrar su longitud
    - Buscar algún elemento 
*/

//Array
$numeros = [23, 32, 12, 4, 1, 90, 14, 25, 55, 0];

function mostrarNumeros($numeros)
{

    $cadena = "";

    $cadena .= "<table border=1>";
    foreach ($numeros as $numero) {
        $cadena .= "<td>$numero</td>";
    }
    $cadena .= "</table>";

    $cadena .= "<hr/>";

    return $cadena;
}

// Recorrer y mostrar

echo "<h1>Array original</h1>";

echo mostrarNumeros($numeros);

echo "<h1>Array ordenado</h1>";
sort($numeros);
echo mostrarNumeros($numeros);


echo '<h1> La logintud del array es de: ' . count($numeros) . '</h1>';

echo "<hr/>";

if (isset($_GET['numero'])) {
    $numero = array_search($_GET['numero'], $numeros);
    if (is_numeric($numero)) {
        echo "<p>El numero " . $_GET['numero'] . " se encuentra en la posicion $numero </p>";
    } else {
        echo "<p>El numero " . $_GET['numero'] . " No se encuentra en el array</p>";
    }
} else {
    echo "<h1>Ingrese un numero en la URL utilizando el parametro 'numero' para verificar si se encuentra en el array </h1>";
}
