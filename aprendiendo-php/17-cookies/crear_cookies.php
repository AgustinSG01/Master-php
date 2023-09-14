<?php

/*
    Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
    nuestra web, con el fin de recordar datos o rastrear cierta informacion o 
    comportamiento del mismo en la web.
*/

// Crear cookie
// setcookie('nombre', 'valor que solo puede ser texto', caducidad, ruta, dominio);

// Cookie basica
setcookie('miCookie', 'valor de mi cookie');

// Cookie con expiracion
setcookie('oneYear', 'valor de mi cookie de un año', time() + (60 * 60 * 24 * 365));

header('location: ver_cookies.php');
