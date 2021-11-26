<?php

//CONEXION CON BBDD
require '../../database/dbconnect.php';
$mysqli = conectar();
//CONSULTA BDD
$resultado = $mysqli->query("INSERT id, nombre, cantidad INTO ingrediente"); //FUNCION INSERT PARA AÑADIR A LA TABLA

//MOSTRAMOS RESULTADOS
echo '<ol>';
while($reg=$resultado->fetch_assoc()){
    echo '<li>';
    echo '<a href="<a href="http://localhost/dev/phpRestaurante/pages/ingrediente/ingrediente.php?id='.$reg['id'].'&titulo='.$reg['titulo'].'">'.$reg['titulo'].'</a>';
    echo '</li>';
}
echo '</ol>';

//BOTON REDIRECCIÓN A ÍNDICE
echo '<pre>'; print_r($_REQUEST); echo '</pre>'; //MUESTRA VARIABLES GET Y POST
echo $_REQUEST["Volver al índice"];

?>