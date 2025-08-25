<?php


$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "develoteca";


$conexion = new mysqli($servidor,$usuario,$password,$basededatos);

if($conexion->connect_error){
    die("Error de conexion: ". $conexion->connect_error);
}
echo "Conexión establecida.......";

?>