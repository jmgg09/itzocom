<?php

include "../entidades/usuarios.php";
include "conexion.php";

class usuariosDatos extends conexion {

	public function __construct(){
         $usuarios = new usuarios();
    }

	function insertarUsuarios($usuario,$pass){

		$con = $this->conectar();
		
		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = base64_encode($pass);
		mysqli_select_db($con,"formLogin");
		$sql = "INSERT INTO usuarios (usuario,contrasena) VALUES(
		'".$usuarios->usuario."',
		'".$usuarios->contrasena."'
		)";
		if(mysqli_query($con,$sql)){
			return true;
		}else{
			return false;
		}
		mysqli_close($con);

	}

    function validar($usuario,$pass){
		$con = $this->conectar();
		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = base64_encode($pass);
        
		mysqli_select_db($con,"formLogin");
        
		$sql = "SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."' and contrasena='".$usuarios->contrasena."'";
        $consulta = mysqli_query($con,$sql);
        $fila = mysqli_fetch_array($consulta);
        if($fila>0){
            if($fila["usuario"] == $usuarios->usuario && $fila["contrasena"]==$usuarios->contrasena){
                return $fila;
            }
        }

    }

 

    public function getDatoU($usuario,$pass){
		$con = $this->conectar();
		$usuarios = new usuarios();
		$usuarios->usuario=$usuario;
		$usuarios->contrasena = base64_encode($pass);
        
		mysqli_select_db($con,"formLogin");
        
		$sql = "SELECT * FROM usuarios WHERE usuario='".$usuarios->usuario."' and contrasena='".$usuarios->contrasena."'";
        $consulta = mysqli_query($con,$sql);
        $fila = mysqli_fetch_array($consulta);
        if($fila>0){
            if($fila["usuario"] == $usuarios->usuario && $fila["contrasena"]==$usuarios->contrasena){
                return json_encode($fila);
            }
        }else{
            return "";
        }

    }

}
?>