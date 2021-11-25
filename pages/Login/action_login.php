<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO usuarios (nombre, contraseya) VALUES ('".$_POST['nombre']."', '".$_POST['contraseña']."'");
header('Location: http://localhost/dev/pages/Home/Home.php');
echo "Armando cabrón, saluda al campeón"
?>