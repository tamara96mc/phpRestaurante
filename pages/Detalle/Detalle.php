<?php
include './header.php';
echo "<h1>Ingredientes de ".$_GET["titulo"]."</h1>";
//CONEXIÓN CON LA BASE DE DATOS
require './conexion_bbdd.php';
$mysqli = conectar();
//CONSULTA A LA BASE DE DATOS
$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
$plato = $resultado->fetch_assoc();
//PINTO DATOS
echo "<ul>";
echo "<li>ID del plato: ".$plato["id"]."</li>";
echo "<li>Título del plato: ".$plato["titulo"]."</li>";
echo "<li>Comensales del plato: ".$plato["comensales"]."</li>";
echo "<li>Tipo del plato: ".$plato["tipo"]."</li>";
echo "</ul>";
?>