<?php

//Debuggear
$nombre = "Agustín";
var_dump($nombre);

//Fechas
echo date("d-m-y");
echo "<br/>";
echo time();
echo "<br/>";

//Matematicas

echo "Raiz cuadrada de 10: " . sqrt(10);
echo "<br/>";
echo "Numero aleatorio entre 10 y 40: " . rand(10, 40);

echo "<br/>";
echo "Numero PI: " . pi();

echo "<br/>";
echo "Redondear: " . round(7.891234, 1);
echo "<br/>";

// Más funciones generales
echo gettype($nombre);
echo "<br/>";

if (is_string($nombre)) {
    echo "Esta variable es un string";
}
echo "<br/>";
if (!is_float($nombre)) {
    echo "Esta variable no es un numero con decimales";
}

echo "<br/>";
// Comprobar si existe una variable
if (isset($edad)) {
    echo "La variable existe";
} else {
    echo "La variable no existe";
}

echo "<br/>";
$frase = "   hola    ";
// Eliminar espacios en blanco al inicio y final de un string
var_dump(trim($frase));
echo "<br/>";

// Eliminar variables / indices de array
$year = 2023;
unset($year);

// Comprobar variables vacias
$texto;

if (empty($texto)) {
    echo "La variable está vacia";
} else {
    echo "El contenido de la variable es: $texto";
}
echo "<br/>";

// Contar caracteres de un string

$cadena = "12345";
echo strlen($cadena);
echo "<br/>";

//Encontrar un caracter dentro de un string

$frase = "La vida es bella";
echo strpos($frase, "i");
echo "<br/>";

// Reemplazar contenido en un string

$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br/>";

// Mayusculas y minusculas
echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);
