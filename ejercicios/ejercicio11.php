<?php

include "conexion.php";




#sentencia de elinado con la clasura WHERE Y LA CONDICION  
$sql = "DELETE FROM alumnos WHERE id>1";


if($conexion->query($sql)===TRUE){

    $id = $conexion->insert_id;
    echo "REGISTRO BORRADO EXITOSAMENTE CON ID: " .$id;
}else {
    echo "Error".$conexion->error;
}






?>