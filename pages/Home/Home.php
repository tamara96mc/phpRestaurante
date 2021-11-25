<h1>Lista de Platos</h1>

<?php

require '../database/db_conect.php';
$mysqli = conectar();

$resultado= $mysqli->query("SELECT * FROM plato");

echo '<ol>';
while($reg=$resultado->fetch_assoc()){
 
    echo '<li>';
    echo '<a href="http://localhost/dev/phprestaurante/pages/Plato/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
    echo '</li>';
}
echo '</ol>';
?>