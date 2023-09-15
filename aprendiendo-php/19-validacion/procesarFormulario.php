<?php
$error = true;

if (!empty($_POST['nombre']) && !empty($_POST['pass']) && !empty($_POST['email']) && !empty($_POST['edad']) && !empty($_POST['apellido'])) {
    $error = false;

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $edad = (int) $_POST['edad'];
    $pass = $_POST['pass'];

    if (!is_string($nombre) || !preg_match("/[a-zA-Z ]+/", $nombre)) {
        $error = true;
    }
    if (!is_string($apellido) || !preg_match("/[a-zA-Z ]+/", $apellido)) {
        $error = true;
    }
    if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = true;
    }
    if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
    }
    if (empty($pass) || !strlen($pass) >= 8) {
        $error = true;
    }
} else {
    $error = true;
}
if ($error) {
    header("location: index.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
</head>

<body>
    <?php
    if (!$error) : ?>
        <h1>Tus datos:</h1>
        <p><?= $nombre ?></p>
        <p><?= $apellido ?></p>
        <p><?= $email ?></p>
        <p><?= $edad ?></p>
    <?php endif ?>
</body>

</html>