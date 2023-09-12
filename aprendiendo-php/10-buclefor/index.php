<?php

/*
    FOR
    for(variable contador; condicion; actualizado de contador) {
        instrucciones
    }
*/

$resultado = 0;

for ($i = 0; $i <= 100; $i++) {
    $resultado += $i;
}

echo "<h1>El resultado final es $resultado</h1>";