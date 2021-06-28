<?php
 
session_start();

echo "Hola " . $_SESSION['correo'];
header("Location: home.php");
?>