<?php
/*
    FUNCIONES:
    Una funcion es un conjunto de intrucciones agrupadas bajo un nombre concreto
    y que pueden reutilizarse invocandola tantas veces como queramos

    function nombreDeMiFuncion ($parametros) { 
        instrucciones
    }

    nombreDeMiFunciones($miParametro)
    */

//Ejemplo 1

// function muestraNombres() {
//     echo "Agustín<br/>";
//     echo "David<br/>";
//     echo "Lucas<br/>";
//     echo "Juan";
//     echo "<hr/>";
// }

// muestraNombres();
// muestraNombres();
// muestraNombres();

//ejemplo 2

function tabla($numero)
{
    echo "<h3>Tabla de multiplicar del $numero</h3>";

    for ($i = 1; $i <= 10; $i++) {
        echo "<p>" . ($i * $numero) . "</p>";
    }
}

if (isset($_GET['numero'])) {
    tabla($_GET['numero']);
} else {
    echo "<h1>Pasa un numero por la URL utilizando el parametro 'numero'</h1>";
}

//Ejemplo 3

function calculadora($numero1, $numero2)
{
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;

    echo "<p>Suma: $suma</p>";
    echo "<p>Resta: $resta</p>";
    echo "<p>Multiplicacion: $multiplicacion</p>";
    echo "<p>Division: $division</p>";
}

calculadora(30, 10);
