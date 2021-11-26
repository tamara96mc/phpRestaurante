<?php
//MOSTRAMOS HEADER
include '../../template/Header/Header.php';
//CONEXIÓN CON LA BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
//CONSULTA A LA BASE DE DATOS
$resultado = $mysqli->query("SELECT * FROM ingrediente WHERE id=".$_GET["id"]);
$ingrediente = $resultado->fetch_assoc(); //En otros ejemplos habíamos usado $reg, como ahora consultamos ingrediente, cambia a $ingrediente
//MOSTRAMOS DATOS
echo '<div class="container">';
echo "<h1>Qué lleva el ingrediente ".$_GET["nombre"]."</h1>";
echo "<ul class='list-group'>";
echo "<li class='list-group-item'>ID del ingrediente: ".$ingrediente["id"]."</li>";
echo "<li class='list-group-item'>Nombre del ingrediente: ".$ingrediente["nombre"]."</li>";
echo "<li class='list-group-item'>Cantidad: ".$ingrediente["cantidad"]."</li>";
echo "</ul>";
echo '</div>';

//MOSTRAMOS FOOTER
include '../../template/Footer/Footer.php';

?>