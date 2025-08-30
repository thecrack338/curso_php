<?php



$servidor = "localhost";
$usuario = "root";
$password = "";
$basededatos = "develoteca";

$conexion = new mysqli($servidor,$usuario,$password,$basededatos);

if($conexion->connect_error){
    die("No se conectó". $conexion->connect_error);
}





if ($_POST) {
    #muestar lo que se ha enviado
    // print_r($_POST);
    #recepciona los datos enviado por el formulario
    $tarea = $_POST['tarea'];
    #preparo una insercion a la base de datos
    $insercion= $conexion->prepare("INSERT INTO tareas(id,tarea) VALUES(NULL,?)");
    #pongo los parametros recibido por el metodo post, en este caso
    #solo el $tarea ya que el id es autoincrementable    
    $insercion->bind_param("s",$tarea);
    #ejecuto my valores
    $insercion->execute();

    echo "Se ha registrado un registro a la base de datos";
}

#recepcion de datos por get y eliminacion de información
if ($_GET) {
    $id=$_GET['delete'];
    $eliminar= $conexion->prepare("DELETE FROM tareas WHERE id=?");    
    $eliminar->bind_param("s",$id);
    $eliminar->execute();
}



#consulta para mostrar datos de la base datos
$sql = "SELECT * FROM tareas ORDER BY id ASC";
$resultado  = $conexion->query($sql);
$datos=$resultado->fetch_all();

?>

