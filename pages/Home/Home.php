<h1>Lista de Platos</h1>

<?php

require '../../database/dbconnect.php';
$mysqli = conectar();

$resultado= $mysqli->query("SELECT * FROM plato");

echo '<ol>';
while($reg=$resultado->fetch_assoc()){
 
    echo '<li>';
    echo '<a href="http://localhost/dev/phprestaurante/pages/Plato/detalle.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
    echo '</li>';
}
echo '</ol>';
//CONSULTA BDD
$resultado = $mysqli->query("SELECT * FROM ingrediente"); //FUNCION PARA AÑADIR A LA TABLA

//MOSTRAMOS RESULTADOS
echo " <h1>Lista de ingredientes</h1>
<ol class='list-group'>";
while($reg=$resultado->fetch_assoc()){
    echo "<li class='list-group-item'>";
    echo '<a class="list-group-item list-group-item-action" href="http://localhost/dev/phprestaurante/pages/Ingrediente/detalle.php?id='.$reg['id'].'&nombre='.$reg['nombre'].'&cantidad='.$reg['cantidad'].'">'.$reg['nombre'].'</a>';
    
    echo "</li>";
}
echo "</ol class='list-group'>";
?>
