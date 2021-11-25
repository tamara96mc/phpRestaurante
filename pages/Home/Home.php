<h1>Lista de Platos</h1>

<?php

require '../../database/dbconnect.php';
$mysqli = conectar();

$resultado= $mysqli->query("SELECT * FROM plato");

echo '<div class="container">';
echo '<ol class="list-group">';
while($reg=$resultado->fetch_assoc()){
 
    echo '<li class="list-group-item">';
    echo '<a class="list-group-item list-group-item-action" href="http://localhost/dev/phprestaurante/pages/Plato/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
    echo '</li>';
}
echo '</ol>';
echo '</div>';
?>