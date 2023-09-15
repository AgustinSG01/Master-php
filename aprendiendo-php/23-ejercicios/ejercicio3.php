<?php
/*
    Ejercicio 3. Realizar una calculadora basica mediante un formulario
*/

$resultado = false;

if (isset($_POST['n1']) || isset($_POST['n2'])) {
    if (isset($_POST['sumar'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] + $_POST['n2']);
    } else if (isset($_POST['restar'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] - $_POST['n2']);
    } else if (isset($_POST['dividir'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] / $_POST['n2']);
    } else if (isset($_POST['multiplicar'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] * $_POST['n2']);
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form action="ejercicio3.php" method="POST">
        <label for="n1">Numero 1</label><br />
        <input type="number" name="n1"><br />
        <label for="n2">Numero 2</label><br />
        <input type="number" name="n2"><br /> <br />
        <input type="submit" value="+" name="sumar">
        <input type="submit" value="-" name="restar">
        <input type="submit" value="/" name="dividir">
        <input type="submit" value="X" name="multiplicar">
    </form>
    <h1><?php if ($resultado != false) echo $resultado ?></h1>
</body>

</html>