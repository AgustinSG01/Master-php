<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios</title>
</head>

<body>
    <h1>Validar formularios PHP</h1>
    <form action="procesarFormulario.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="" required="required"><br>
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" id="" required="required"><br>
        <label for="edad">Edad</label><br>
        <input type="number" name="edad" id="" required="required"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="" required="required"><br>
        <label for="pass">Contraseña</label><br>
        <input type="password" name="pass" id="" required="required"><br>
        <?php if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error) {
                echo '<strong style="color:red">Por favor complete todos los campos</strong><br>';
            }
        } ?>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>