<?php
include '../../template/Header/header.php';

//CONEXIÓN CON LA BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
//CONSULTA A LA BASE DE DATOS
$resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
$plato = $resultado->fetch_assoc();
//PINTO DATOS
echo '<div class="container">';
echo "<h1>Ingredientes de ".$_GET["titulo"]."</h1>";
echo "<ul class='list-group'>";
echo "<li class='list-group-item'>ID del plato: ".$plato["id"]."</li>";
echo "<li class='list-group-item'>Título del plato: ".$plato["titulo"]."</li>";
echo "<li class='list-group-item'>Comensales del plato: ".$plato["comensales"]."</li>";
echo "<li class='list-group-item'>Tipo del plato: ".$plato["tipo"]."</li>";
echo "</ul>";
echo '</div>';
include '../../template/Footer/footer.php';
?>