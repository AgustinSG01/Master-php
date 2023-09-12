<?php

$cantantes = ['2pac', 'drake', 'taylor swift', 'andres'];

// Ordenar
sort($cantantes);
var_dump($cantantes);
echo "<br/>";

// Añadir elementos
$cantantes[] = "alejandro sanz";
array_push($cantantes, 'Rojuu');
var_dump($cantantes);
echo "<br/>";

// Quitar elementos
array_pop($cantantes);
var_dump($cantantes);
echo "<br/>";
unset($cantantes[1]);
var_dump($cantantes);
echo "<br/>";

// Obtener indice aleatorio

$index = array_rand($cantantes);
echo '<h1>' . $cantantes[$index] . '</h1>';
echo "<br/>";

// Dar la vuelta al array
var_dump(array_reverse($cantantes)); // No modifica el array original
echo "<br/>";

// Buscar dentro del array
$resultado = array_search('drake', $cantantes);
echo $resultado;

// Contar numero de elementos
echo count($cantantes);
echo sizeof($cantantes);
