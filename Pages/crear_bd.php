<?php
$servidor="localhost";
$nombreusuario ="root";
$password = "";

$conexion = new mysqli($servidor,$nombreusuario,$password);

if($conexion->connect_error){
	die("Conexion fallida:". $conexion->connect_error);
}

$sql = "CREATE DATABASE MyBD";

if($conexion->query($sql)=== true){
	echo "Base de datos creada correctamente...";
}else{
	die("Error al crear base de datos:" . $conexion->error);

}

?>