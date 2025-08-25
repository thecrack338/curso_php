<?php

# definimos los parametro de acceso a la base de datos 
$servidor = "localhost";
$usuario = "root";
$password = "";

#realizamos una conexion a la base de datos
$conexion = new mysqli($servidor,$usuario,$password);

#verificamos que la conexion sea exitosa o si tiene error
if($conexion->connect_error){
    die("Error de conexion: ". $conexion->connect_error);
}
echo "Conexión establecida.......";


#realizamos una sentencia sql para crear una base de datos;
$sql = "CREATE DATABASE develoteca";

#verificamos que exista la conexion y realizamos el query (query es lo mismo que consulta) 
if($conexion->query($sql)===TRUE){
    echo "Base de datos creada";
}else{
    echo "Error".$conexion->error;
}

?>