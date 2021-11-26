<?php
include '../../template/Header/header.php';
require '../../database/dbconnect.php';
$mysqli = conectar();

$resultado= $mysqli->query("SELECT * FROM plato");

echo '
<div class="home-full-width-back">
<div class="container-max-width-400">
<h1 class="home-h1">Selecciona tu plato</h1>';
echo '<ol class="list-group">';
while($reg=$resultado->fetch_assoc()){
 
    echo '<li class="list-group-item">';
    echo '<a class="list-group-item list-group-item-action" href="http://localhost/dev/phprestaurante/pages/Plato/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
    echo '</li>';
}
echo '</ol>';
echo '</div>';
echo '</div>';
include '../../template/Footer/footer.php';
?>