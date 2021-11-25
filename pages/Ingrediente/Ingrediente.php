<?php
include '../../template/Header/Header.php';
echo "<h1>Ingredientes de ".$_GET["titulo"]."</h1>";
//CONEXIÓN CON LA BASE DE DATOS
require './conexion_bbdd.php';
$mysqli = conectar();
//CONSULTA A LA BASE DE DATOS
$resultado = $mysqli->query("SELECT * FROM ingrediente WHERE id=".$_GET["id"]);
$ingrediente = $resultado->fetch_assoc();
//PINTO DATOS
echo "<ul>";
echo "<li>ID del ingrediente: ".$ingrediente["id"]."</li>";
echo "<li>Nombre del ingrediente: ".$ingrediente["nombre"]."</li>";
echo "<li>Cantidad/es: ".$ingrediente["cantidad"]."</li>";
echo "</ul>";
?>