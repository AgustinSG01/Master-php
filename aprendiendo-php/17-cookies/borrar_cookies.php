<?php

if (isset($_COOKIE['miCookie'])) {
    unset($_COOKIE['miCookie']);
    setcookie('miCookie', '', time() - 100);
}
if (isset($_COOKIE['oneYear'])) {
    unset($_COOKIE['oneYear']);
    setcookie('oneYear', '', time() - 100);
}

header('location: ver_cookies.php');