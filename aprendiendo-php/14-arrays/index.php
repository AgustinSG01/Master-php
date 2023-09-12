<?php

/*
    ARRAYS
    Un array es un conjunto de datos/valores, bajo un unico nombre
*/

$pelicula = 'Batman';
$peliculas = array('Batman', 'Spiderman', 'Get Out');
$cantantes = ['2pac', 'drake', 'taylor swift'];

// Array asociativo
$personas = ['nombre' => 'Agustín', 'apellido' => 'Godoy', 'web' => 'blablabla.com'];

var_dump($personas['nombre']);
// Recorrer con for

echo '<h1>Listado de peliculas</h1>';
echo '<ul>';
for ($i = 0; $i < count($peliculas); $i++) {
    echo '<li>';
    echo $peliculas[$i];
    echo '</li>';
}
echo '</ul>';

// Recorrer con ForEach

echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";
}
echo "</ul>";

// Arrays multidimencionales

$contactos = [
    ['nombre' => 'Juan', 'email' => 'juan@gmail.com'],
    ['nombre' => 'David', 'email' => 'david@gmail.com'],
    ['nombre' => 'Edgar', 'email' => 'edgar@gmail.com']
];

echo "<h1>Contactos</h1>";

foreach ($contactos as $contacto) {
    echo '<p>Nombre: '.$contacto['nombre'].'</p>';    
    echo '<p>Email: '.$contacto['email'].'</p>';    
}
