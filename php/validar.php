<?php
 
$usuario = $_POST['correo'];
$pass = $_POST['password'];
 
if(empty($usuario) || empty($pass)){
header("Location: inicio-sesion.php");
exit();
}

$con = new mysqli('localhost','root','');
if ($con->connect_error){
	die("Conexión fallida: " . $con->connect_error);
}

$link = mysqli_connect("localhost","root","","masterbike");
mysqli_select_db($link, "masterbike");

$result = mysqli_query($link, "SELECT * FROM registros WHERE correo='" . $usuario . "'");
 
if($row = mysqli_fetch_array($result)){
	if($row['contrasena'] == $pass){
		session_start();
		$_SESSION['correo'] = $usuario;
		if($usuario == "admin@masterbike.cl"){
			header("Location: ./admin.php");
		}else{
			header("Location: ./contenido.php");
		}
	}else{
		header("Location: inicio-sesion.php");
	}
}
?>