<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO plato (titulo, comensales, tipo) VALUES ('".$_POST['titulo']."', '".$_POST['comensales']."', '".$_POST['tipo']."')");
header('Location: http://localhost/dev/pages/Home/home.php');
echo "Armando cabrón, saluda al campeón"
?>