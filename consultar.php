<?php

include 'Clases/conexion.php';
include 'Clases/Usuario.php';

$objConexion= new conexion();
$objUsuario=new usuario();

$conexion=$objConexion->conectar();
$datos=$objUsuario->consultar($conexion);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table borde ="">
<tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>DOCUMENTO</th>
        <th>FECHA NACIMIENTO</th>
</tr>
<?php

while($dato=mysqli_fetch_array($datos)){
?>
<tr>
        <td><?php echo $dato['id'];?></td>
        <td><?php echo $dato['nombre'];?></td>
        <td><?php echo $dato['apellido'];?></td>
        <td><?php echo $dato['documento'];?></td>
        <td><?php echo $dato['fecha_nacimiento'];?></td>
        <td><a href="editar.php?id=<?php echo $dato['id'];?>">Editar</a></td>
        <td><a href="Controlador/eliminar.php?id=<?php echo $dato['id'];?>">Eliminar</a></td>
</tr>
<?php
}
?>

</table>
</body>
</html>