<?php

/*
    Variables locales: Son las variables que se declaran dentro de una funcion y solo están
    disponibles dentro de esta, a menos que las devuelva con un return

    Variables globales: Son las que se declaran fuera de una funcion y están disponible tanto fuera 
    como dentro de estas
*/

$frase = "Ni los genios son tan genios ni los mediocres tan mediocres";

echo $frase;

function holaMundo()
{
    global $frase;
    echo $frase;
}

holaMundo();

echo "<hr/>";


//Funciones variables

function buenosDias()
{
    return "Hola, buenos dias";
}

function buenasTardes()
{
    return "Hola! buenas tardes";
}

function buenasNoches()
{
    return "Que duermas bien";
}

$horario = "buenasNoches";

echo $horario();
