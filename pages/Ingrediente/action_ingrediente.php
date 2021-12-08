<?php
//MOSTRAMOS HEADERS
include '../../template/Header/Header.php';

//CONEXION CON BBDD
require '../../database/dbconnect.php';
$mysqli = conectar();
//CONSULTA BDD
$resultado = $mysqli->query("SELECT id, nombre, cantidad FROM ingrediente");

//MOSTRAMOS RESULTADOS
echo '<div class="container">';
echo "<h1>Los ingredientes</h1>";
echo "<ol class='list-group'>";
while($reg=$resultado->fetch_assoc()){
    echo "<li class='list-group-item'>";
    echo '<a href="./detalle.php?id='.$reg['id'].'&nombre='.$reg['nombre'].'&cantidad='.$reg['cantidad'].'">'.$reg['nombre'].'</a>';
    echo "</li>";
}
echo "</ol>";

//MOSTRAMOS FOOTER
include '../../template/Footer/Footer.php';


?>