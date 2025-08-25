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


#realizamos una sentencia sql para INSERTAR DATOS EN UNA TABLA;
$sql = "INSERT INTO alumnos 
(id,nombre,correo) VALUES (NULL, 'ruben','hola2025@gmail.com')
";

#verificamos que exista la conexion y realizamos el query (de inserción) 
if($conexion->query($sql)==TRUE){
    echo "REGISTRO AGREGADO";
}else{
    echo "Hubo un error!!!!!!!!!!!!!".$conexion->error;
}

#recordar siempre sera la conexion a la base de datos
$conexion->close();

?>