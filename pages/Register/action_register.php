<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO usuarios (nombre, correo, clave, rol) VALUES ('".$_POST["nombre"] ."', '".$_POST["correo"]."', '".$_POST["clave"]."', 'usuario')");
header('Location: ../Login/Login.php');
?>