<?php
// Abrir archivo
// $abrirArchivo = fopen("fichero_texto.txt", "a+");

// // Leer contenido
// while (!feof($abrirArchivo)) {
//     $contenido = fgets($abrirArchivo);
//     echo $contenido.'<br/>';
// }

// // Escribir en archivo
// fwrite($abrirArchivo, "Soy un texto creado en php");

// // Cerrar archivo
// fclose($abrirArchivo);

//Copiar archivos
//copy ('fichero_texto.txt', 'fichero_copia.txt') or die ('Error al copiar');

// Renombrar
// rename('fichero_copia.txt', 'nombre_cambiado.txt');

// Eliminar un fichero
//unlink('nombre_cambiado.txt') or die('Error al borrar');

// Comprobar si un archivo existe
if (file_exists('fichero_texto.txt')) {
    echo 'El archivo existe';
} else {
    echo 'El archivo NO existe';
}
