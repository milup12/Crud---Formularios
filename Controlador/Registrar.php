<?php

include '../Clases/conexion.php';
include '../Clases/Usuario.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objUsuario = new Usuario();

echo $objUsuario->registrar($conexion,$_POST['nombre'],$_POST['apellido'],$_POST['documento'],$_POST['fecha_nacimiento']);