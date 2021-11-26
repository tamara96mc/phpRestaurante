<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
$resultado = $mysqli->query("INSERT INTO plato (titulo, comensales, tipo) VALUES ('".$_REQUEST['titulo']."', '".$_REQUEST['comensales']."', '".$_REQUEST['tipo']."')");
header('Location: http://localhost/dev/phpRestaurante/pages/Home/home.php');
?>