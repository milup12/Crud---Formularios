<?php

class Usuario{

    public function Registrar($conexion,$nombre,$apellido,$documento,$fecha_nacimiento){
        echo $query = "INSERT INTO usuario(nombre,apellido,documento,fecha_nacimiento) VALUES ('$nombre','$apellido','$documento','$fecha_nacimiento')";
        $consulta= mysqli_query($conexion,$query);

        if($consulta){
            $respuesta="Usuario Registrado";
        }else{
            $respuesta="Problemas al registrar";
        }

        return $respuesta;
    }

    public function consultar($conexion){
        $query="SELECT*FROM usuario";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
    public function consultarId($conexion,$id){
        $query="SELECT*FROM usuario WHERE id = $id";
        $consulta=mysqli_query($conexion,$query);
        return $consulta;
    }
    public function editar($conexion,$nombre,$apellido, $documento,$fecha_nacimiento,$id){
        $query="UPDATE usuario SET nombre ='$nombre',apellido='$apellido',
        documento=$documento,fecha_nacimiento='$fecha_nacimiento' WHERE id =$id";
        $consulta=mysqli_query($conexion,$query);
        if($consulta){
            $respuesta="Actualizado con exito";
        }else{
            $respuesta="Problemas al actualizar";
        }
      return $respuesta;
    }

    public function eliminar($conexion,$id){
        $query="DELETE FROM usuario WHERE id =$id";
        $consulta=mysqli_query($conexion,$query);
        if($consulta){
            $respuesta="Eliminado con exito";
        }else{
            $respuesta="Usuario no se elimino";
        }
      return $respuesta;
    }
}