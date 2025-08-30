<?php

include "conexion.php";

# COMO HACER UN PROCEDIMIENTO ALMACENADO EN MYSQLI
# SIRVE PARA MAS SEGURIDAD Y EVITAR INYECCION DE DATOS
/**
    DELIMITER $$
    CREATE PROCEDURE obtenerNombre()
    BEGIN
        SELECT nombre as dato FROM alumnos;
    END$$
    DELIMITER ; 
 **/

$resultado = $conexion->query("CALL obtenerNombre()");

while ($fila=$resultado->fetch_assoc()) {
    
    echo"<br>". "Dato: ". $fila['datos']."<br>";

}






?>