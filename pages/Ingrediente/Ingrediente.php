<?php
//MOSTRAMOS HEADER
include '../../template/Header/Header.php';
//CONEXION CON BBDD
require '../../database/dbconnect.php';
$mysqli = conectar();
// //CONSULTA BDD
// $resultado = $mysqli->query("SELECT * FROM ingrediente"); //FUNCION PARA AÑADIR A LA TABLA

// //MOSTRAMOS RESULTADOS
// echo "<ol class='list-group'>";
// while($reg=$resultado->fetch_assoc()){
//     echo "<li class='list-group-item'>";
//     echo '<a class="list-group-item list-group-item-action" href="http://localhost/dev/phprestaurante/pages/Ingrediente/detalle.php?id='.$reg['id'].'&nombre='.$reg['nombre'].'&cantidad='.$reg['cantidad'].'">'.$reg['nombre'].'</a>';
    
//     echo "</li>";
// }
// echo "</ol class='list-group'>";

//MOSTRAMOS FOOTER
include '../../template/Footer/Footer.php';


?>