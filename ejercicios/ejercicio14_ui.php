<?php
include "ejercicio14.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz Gráfica</title>
</head>
<body>
<br>
<H1>Bienvenidos</H1>

<form action="" method="post">
    Nombre de la tarea:
    <input type="text" name="tarea" id="tarea" >

    <input type="submit" value="Agregar">

</form>

<!-- table = tabla -->
<table>
    <!--thead = cabecera tabla -->
    <thead>
        <!--tr = fila -->
        <tr>
            <!--th= columna -->
            <th>#</th>
            <th>Tarea</th>
            <th>Acción</th>
        </tr>
    </thead>

    <!--mira como se colocar php dentro de html con los datos
    ya llamado-->
    <?php foreach ($datos as $dato) { ?>
        
    
       <tr>
            <!--td = contiene datos  -->
            <td> <?php echo $dato[0];?> </td>
            <td> <?php echo $dato[1];?> </td>
            <td> <a href="?delete=<?php echo $dato[0];?>">[Borrar]</a></td>             
        </tr>

    <?php } ?>

</table>

</body>
</html>

