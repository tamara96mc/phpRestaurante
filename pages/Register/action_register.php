<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO usuarios (nombre, correo, contraseña, rol) VALUES ('".$_POST["nombre"] ."', '".$_POST["correo"]."', '".$_POST["contraseña"]."', 'usuario')");
header('Location: http://localhost/dev/phpRestaurante/pages/Home/Home.php');
?>