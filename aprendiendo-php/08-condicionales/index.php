<?php

/**
 * CONDICIONAL IF:
 * 
 * if (condicion) {
 *  instrucciones
 * } else {
 *  otras instrucciones
 * }
 * 
 * 
 * OPERADORES DE COMPARACION:
 * 
 * == igual
 * === identico
 * != diferente
 * <> diferente
 * !== no identico
 * < menor que
 * > mayor que
 * <= menor o igual que
 * >= mayor o igual que
 * 
 * OPERADORES LOGICOS:
 * && = AND
 * || = OR
 * ! = NOT
 * and / or = AND / OR
 * 
 */

//Ejemplo 1
$color = "rojo";

if ($color === "rojo") {
    echo "EL COLOR ES ROJO";
} else {
    echo "EL COLOR NO ES ROJO";
}

echo '</br>';

//Ejemplo 2
$year = 2023;

if ($year <> 2023) {
    echo "no estamos en 2023";
} else {
    echo 'estamos en 2023';
}

//Ejemplo 3
$nombre = "David";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 25;
$mayoriaEdad = 18;

if ($edad >= $mayoriaEdad) {

    echo "<h1>$nombre es mayor de edad</h1>";

    if ($continente == "Europa") {
        echo "<h2>y es de $ciudad</h2>";
    } else {
        echo "<h2>no es europeo</h2>";
    }
} else {
    echo "<h1>$nombre no es mayor de edad</h1>";
}


//Ejemplo 4
$dia = 3;

if ($dia == 1) {
    echo "Es lunes";
} else if ($dia == 2) {
    echo "Es martes";
} else if ($dia == 3) {
    echo "Es miercoles";
} else if ($dia == 4) {
    echo "Es jueves";
} else if ($dia == 5) {
    echo "Es viernes";
} else {
    echo "Es finde";
}

echo '<hr/>';


//Ejemplo 5 

$edad1 = 18;
$edad2 = 64;
$edadOficial = 20;

if ($edadOficial >= $edad1 && $edadOficial <= $edad2) {
    echo "Está en edad de trabajar";
} else {
    echo "No está en edad de trabajar";
}

echo "<hr/>";

$pais = "Mexico";

if ($pais == "Mexico" || $pais == "España" || $pais == "Colombia") {
    echo "En este pais se habla español";
} else {
    echo "En este pais no se habla español";
}

//GOTO
goto marca;
echo '<h3>Instruccion 1</h3>';
echo '<h3>Instruccion 2</h3>';
echo '<h3>Instruccion 3</h3>';
echo '<h3>Instruccion 4</h3>';

marca:
echo "Me he saltado 4 echos";



