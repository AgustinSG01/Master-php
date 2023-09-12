<?php

/*
    Ejercicio 5. Mostrar todos los numero que estén entre medio de dos numeros
    pasados por URL
 */

if (isset($_GET['numero1']) && isset($_GET['numero2']) && $_GET['numero1'] < $_GET['numero2'] - 1) {
    $numero1 = (int) $_GET['numero1'];
    $numero2 = (int) $_GET['numero2'];

    for ($numero = $numero1 + 1; $numero < $numero2; $numero++) {
        echo "<p>$numero</p>";
    }
} else {
    echo "<h1>Por favor pase dos numeros mediante los parametros \"numero1\" y \"numero2\" al final de la URL y asegurese de que haya diferencia entre ambos</h1>";
}
