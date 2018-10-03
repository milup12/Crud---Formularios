<?php

include 'Clases/conexion.php';
include 'Clases/Usuario.php';

$objConexion=new conexion();
$objUsuario=new usuario();

$conexion=$objConexion->conectar();
$datos=$objUsuario->consultarId($conexion,$_GET['id']);

$nombre;
$apellido;
$documento;
$fecha_nacimiento;

while($dato=mysqli_fetch_array($datos)){
    $id=$dato['id'];
    $nombre=$dato['nombre'];
    $apellido=$dato['apellido'];
    $documento=$dato['documento'];
    $fecha_nacimiento=$dato['fecha_nacimiento'];

}
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
<form action="Controlador/editar.php" method="post">
    <input value="<?php echo $id; ?>" type="hidden" name="id">
    <label for="">Nombre:<label><input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
    <label for="">Apellido:<label><input type="text" name="apellido"  value="<?php echo $apellido; ?>"><br>
    <label for="">Documento:<label><input type="text" name="documento"  value="<?php echo $documento; ?>"><br>
    <label for="">Fecha de nacimiento:<label><input type="text" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>"><br>
    <input type="submit" value="Actualizar">
</body>
</html>