<?php

include "conexion.php";






$sql = "UPDATE alumnos SET nombre='josue' WHERE id=1";


if($conexion->query($sql)===TRUE){

    $id = $conexion->insert_id;
    echo "REGISTRO ACTUALIZADO EXITOSAMENTE CON ID: " .$id;
}else {
    echo "Error".$conexion->error;
}






?>