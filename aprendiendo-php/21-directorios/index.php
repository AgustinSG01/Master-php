<?php

if (!is_dir('miCarpeta')) {
    mkdir('miCarpeta', 0777) or die('No se puede crear la carpeta');
} else {
    echo 'Ya existe la carpeta';
}
echo "<hr/>";

// Eliminar directorio
//rmdir('miCarpeta');


if ($gestor = opendir('./miCarpeta')) {
    while (false !== ($archivo = readdir($gestor))) {
        if ($archivo != '.' && $archivo != '..')
            echo $archivo . '<br/>';
    }
}
