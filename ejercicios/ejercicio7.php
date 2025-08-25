<?php
#realizamos la conexión
include "conexion.php";


//prepare

$instruccion = $conexion->prepare("INSERT INTO alumnos (id,nombre,correo) VALUES (NULL,?,?)");


#lo que se hace cuando preparamo una sentencia y le pasamos parametro por eso arriba quedaron los ? ? que van 
#hacer replazado por variables
$instruccion->bind_param("ss", $nombre,$correo);

$nombre = "Jean";
$correo = "Jean2026@gmail.com";
$instruccion->execute();

$nombre = "Jean2";
$correo = "Jean22026@gmail.com";
$instruccion->execute();

$nombre = "Jean33";
$correo = "Jean202336@gmail.com";
$instruccion->execute();

#recordar siempre sera la conexion a la base de datos
$conexion->close();


?>