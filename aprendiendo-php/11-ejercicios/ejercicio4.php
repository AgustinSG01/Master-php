<?php

/*
    Ejercicio 4. Recibir dos numeros mediante la URL y realizar las 
    cuatro operaciones basicas
 */

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];

    echo "<p>Suma: " . ($numero1 + $numero2) . "</p>";
    echo "<p>Resta: " . ($numero1 - $numero2) . "</p>";
    echo "<p>Multiplicacion: " . ($numero1 * $numero2) . "</p>";
    echo "<p>Division: " . ($numero1 / $numero2) . "</p>";
} else {
    echo "<h1>Por favor pase dos numeros mediante los parametros \"numero1\" y \"numero2\" al final de la URL</h1>";
}
