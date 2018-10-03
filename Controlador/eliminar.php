<?php

include '../Clases/conexion.php';
include '../Clases/Usuario.php';

$objConexion=new conexion();
$objUsuario=new usuario();

$conexion=$objConexion->conectar();
echo $objUsuario->eliminar($conexion,$_GET['id']);