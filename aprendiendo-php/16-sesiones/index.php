<?php

/*
    Una sesion lo que hace es almacenar y persistir datos del usuario mientras navega
    en un sitio web hasta que cierra sesion o su navegador
*/

// Iniciar la sesion
session_start();

// Variable local
$variableNormal = "Soy una cadena de texto";

// Variable de sesion
$_SESSION['variablePersistente'] = "Hola soy una sesion activa";

echo $variableNormal.'<br/>';
echo $_SESSION['variablePersistente'];