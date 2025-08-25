<?php

include "conexion.php";

#realizamos una sentencia sql para hacer una insercion multiple;
$sql = "INSERT INTO alumnos 
(id,nombre,correo) VALUES (NULL, 'ruben','hola2025@gmail.com');";

#Ese punto que pongo al final de la variable $sql. es para concatenar multiple insercion
#el punto y como es el delimitador para que se pueda hacer eso 

$sql.= "INSERT INTO alumnos 
(id,nombre,correo) VALUES (NULL, 'hola','hola2025@gmail.com');";

$sql.= "INSERT INTO alumnos 
(id,nombre,correo) VALUES (NULL, 'hellowww','hola2025@gmail.com');";


#verificamos que exista la conexion y realizamos la consulta con la funcion multi_query()
if($conexion->multi_query($sql)==TRUE){

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