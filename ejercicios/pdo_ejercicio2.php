<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";


try {
    $conexion = new PDO("mysql:host=$servidor",$usuario,$clave);

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida........";

} catch (PDOException $error) {
    echo "Error". $error->getMessage();
}