<?php

/*
    Ejercicio 6. Mostrar una tabla de HTML con las tablas de multiplicar
    del 1 al 10
*/

echo "<table border=1>";
echo "<tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th> Tabla del $i </th>";
}
echo "</tr>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";

    for ($j = 1; $j <= 10; $j++) {
        $resultado = $j * $i;
        echo "
        <td>$resultado</td>
        ";
    }
    echo "</tr>";
}

echo "</table>";
