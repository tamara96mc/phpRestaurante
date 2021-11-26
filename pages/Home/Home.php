<?php

include '../../template/Header/header.php';
require '../../database/dbconnect.php';
$mysqli = conectar();

$resultado = $mysqli->query("SELECT * FROM plato");

echo '
<div class="home-full-width-back">
<div class="container-max-width-400">
<h1 class="home-h1">Selecciona tu plato</h1>';
echo '<ol class="list-group">';
while ($reg = $resultado->fetch_assoc()) {

    echo '<li class="list-group-item">';
    echo '<a class="list-group-item list-group-item-action" href="http://localhost/dev/phprestaurante/pages/Plato/detalle.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>';
    echo '</li>';
}
echo '</ol>
<a href="../Plato/Plato.php"><input type="text" readonly value="Crear plato"></a>';
//CONSULTA BDD
$resultado = $mysqli->query("SELECT * FROM ingrediente"); //FUNCION PARA AÑADIR A LA TABLA

//MOSTRAMOS RESULTADOS
echo " <h1 class='home-h1'>Lista de ingredientes</h1>
<ol class='list-group'>";
while ($reg = $resultado->fetch_assoc()) {
    echo "<li class='list-group-item'>";
    echo '<a class="list-group-item list-group-item-action" href="http://localhost/dev/phprestaurante/pages/Ingrediente/detalle.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&cantidad=' . $reg['cantidad'] . '">' . $reg['nombre'] . '</a>';

    echo "</li>";
}
echo "</ol class='list-group'>
<a href='../Ingrediente/nuevoIngrediente.php'><input type='submit' class='button' value='Crear ingrediente'></a>
</div>
</div>";
?>


<?php
include '../../template/Footer/footer.php';

?>

