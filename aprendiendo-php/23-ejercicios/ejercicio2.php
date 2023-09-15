<?php

/*
    Ejercicio 2.
    A. Una funcion
    B. Validar un email con filter_var
    C. Recoger una variable por get y validarla
    D. Mostrar el resultado
*/

function verifyEmail ($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $email;
    } else {
        return "Invalid email";
    }
}

if (isset($_GET['email'])) {
    echo verifyEmail($_GET['email']);
} else {
    echo "<h1>Pasa un email por parametro get</h1>";
}
