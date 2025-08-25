<?php

include "conexion.php";

#realizamos una sentencia sql para INSERTAR DATOS EN UNA TABLA;
$sql = "INSERT INTO alumnos 
(id,nombre,correo) VALUES (NULL, 'ruben','hola2025@gmail.com')
";

#verificamos que exista la conexion y realizamos el query (de inserción) 
if($conexion->query($sql)==TRUE){

    #para devolver el id agregado la funcion
    #insert_id
    $id =$conexion->insert_id;
    echo "Registro agregado con el ID: ".$id;
}else{
    echo "Hubo un error!!!!!!!!!!!!!".$conexion->error;
}

#recordar siempre sera la conexion a la base de datos
$conexion->close();


?>