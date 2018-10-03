<?php

include '../Clases/conexion.php';
include '../Clases/Usuario.php';

$objConexion=new conexion();
$objUsuario=new usuario();

$conexion=$objConexion->conectar();

echo $objUsuario->editar($conexion,$_POST['nombre'],$_POST['apellido'],$_POST['documento']
,$_POST['fecha_nacimiento'],$_POST['id']);