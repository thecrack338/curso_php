<?php
include "conexion.php";


#sentecia para traer todos los datos de la tabla alumno con la clasura WHERE con MAYUSCULA NO EN MINUSCULA
#porque si no lanza error
#ACENDENTE
#DESENDENTE
$sql ="SELECT * FROM alumnos WHERE id > 5 ORDER BY id DESC";


#consultar la consulta
$resultado=$conexion->query($sql);

#verificar si existe datos en la base de datos 
if ($resultado->num_rows>0) {
    
    echo "Registro encontrados"."<br>";
    #leer registro 1 x 1 y mostrar en la fila
    while($fila=$resultado->fetch_assoc()) {
        
       // print_r($fila);

       echo "ID: ". $fila['id']." "."NOMBRE: ".$fila['nombre']. " CORREO: ". $fila['correo']. "<br/>";

    }

}else{
    echo "No hay registros";
}

#cerrar la conexión
$conexion->close();








?>