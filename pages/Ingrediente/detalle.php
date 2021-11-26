<?php
include '../../template/Header/Header.php';
echo '<h1>Ingredientes de ' . ($_GET["titulo"]. $_GET["id"]) . '</h1>';
//CONEXIÓN CON LA BASE DE DATOS
require './database/dbconnect.php';
$mysqli = conectar();
//CONSULTA A LA BASE DE DATOS
$resultado = $mysqli->query("SELECT * FROM ingrediente WHERE id=".$_GET["id"]);
$ingrediente = $resultado->fetch_assoc(); //En otros ejemplos habíamos usado $reg, como ahora consultamos ingrediente, cambia a $ingrediente
//MOSTRAMOS DATOS
echo '<ul>';
echo '<li>ID del ingrediente: '.$ingrediente['id'].'</li>';
echo '<li>Nombre del ingrediente: '.$ingrediente['nombre'].'</li>';
echo '<li>Cantidad/es: '.$ingrediente['cantidad'].'</li>';
echo '</ul>';

//BOTON REDIRECCIÓN A ÍNDICE
echo '<pre>'; print_r($_REQUEST); echo '</pre>'; //MUESTRA VARIABLES GET Y POST
echo $_REQUEST["Volver al índice"];

?>