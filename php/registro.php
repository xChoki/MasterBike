<!DOCTYPE html>
<html>
<head>
	<title> Registrando usuario</title>
</head>
<body>
<?php
$con=new mysqli("localhost","root","","masterbike");
if($con->connect_error){
	die("Conexión fallida". $con->connect_error);
}
$sql = "INSERT INTO registros (nombre,apellido,correo,contrasena,creado) VALUES (\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[correo]\",\"$_POST[contrasena]\",NOW())";
if($con->query($sql) === TRUE){
	print "<script>alert(\"Registro exitoso. Proceda a logearse\");window.location='../iniciar-sesion.html';</script>";
}else{
	echo "Error: ". $sql . "<br>" . $con->error;
}
mysqli_close($con);
echo "Usuario correctamente registrado!";

?>
<a href="../iniciar-sesion.html">Iniciar sesion</a>
</body>
</html>