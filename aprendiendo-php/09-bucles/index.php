<?php
/*
    BUCLE WHILE 
    Estructura de control que itera o repite la ejecucion de una serie de instrucciones 
    tantas veces como sea necesario, en base a una condicion

    while (condicion) {
        bloque de instrucciones
    }

*/

$numero = 0;

while ($numero <= 100) {
    echo "<p>$numero</p>";
    $numero++;
}

echo "<hr/>";

//Ejemplo

//isset determina si una variable está definida y no es null.
if (isset($_GET['numero'])) {
    //Cambiar tipo de dato
    $numero = (int)$_GET['numero'];
} else {
    $numero = 1;
}

var_dump($numero);

echo "<h1>Tabla de multiplicar de $numero</h1>";

$factor = 1;

while ($factor <= 10) {
    $resultado = $numero * $factor;
    echo "<p>$numero X $factor = $resultado</p>";
    $factor++;
}

echo "<hr/>";


/*
DO WHILE
do {
    instrucciones
}
while (condicion)
 
*/

$edad = 18;
$contador = 1;
do {
 echo "<p>Tenes acceso al local privado $contador</p>";
 $contador++;
} while ($edad >= 18 && $contador <= 10);
