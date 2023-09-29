<?php
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");

// Comprobar si la conexion es correcta
if (mysqli_connect_errno()) {
    echo "la conexion a la base de deatos a fallado: " . mysqli_connect_errno();
} else {
    echo "Conexion realizada exitosamente";
}
echo "<br/>";

// Consulta para configurar la codificacion de caracteres 
mysqli_query($conexion, "SET NAMES 'utf8'");

// Consulta SELECT desde PhP
$query = mysqli_query($conexion, "SELECT * FROM notas");

while ($nota = mysqli_fetch_assoc($query)) {
    echo $nota['descripcion'];
}

// Insertar en la base de datos desde php
$sql = "INSERT INTO notas VALUES(null, 'Nota desde php', 'Descripcion introducida desde php', 'green')";
$insert = mysqli_query($conexion, $sql);

if ($insert) {
    echo "Datos insertados correctamente";
} else {
    echo "Error: ".mysqli_error($conexion);
}