<?php

# definimos los parametro de acceso a la base de datos 
$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "develoteca";

#realizamos una conexion a la base de datos
$conexion = new mysqli($servidor,$usuario,$password,$basededatos);

#verificamos que la conexion sea exitosa o si tiene error
if($conexion->connect_error){
    die("Error de conexion: ". $conexion->connect_error);
}
echo "Conexión establecida.......";


#realizamos una sentencia sql para crear una tabla;
$sql = "CREATE TABLE  alumnos(
    id INT(6) UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    correo VARCHAR(50) NOT NULL

);";

#verificamos que exista la conexion y realizamos el query (query es lo mismo que consulta) 
if($conexion->query($sql)==TRUE){
    echo "Tabla creada";
}else{
    echo "Hubo un error!!!!!!!!!!!!!".$conexion->error;
}

?>