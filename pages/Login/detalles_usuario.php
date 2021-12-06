<?php
include '../../template/Header/header.php';
?>

<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();

//HAGO CONSULTA A BASE DE DATOS PARA BUSCAR EL USUARIO LOGADO CON CORREO Y CONTRASEÑA
$resultado = $mysqli->query("SELECT * FROM usuarios WHERE (correo ='".$_POST["correo"]."' AND contraseña = '".$_POST["contraseña"]."')");

//GUARDO RESULTADO DE LA CONSULTA EN VARIABLE USUARIO
$usuario = $resultado->fetch_all();

//PINTO DATOS DE USUARIO LOGADO
echo '<div class="container">';
echo "<h1>Perfil de usuario de ".$usuario[0][1]."</h1>";
echo "<ul class='list-group'>";
echo "<li class='list-group-item'>ID del usuario: ".$usuario[0][0]."</li>";
echo "<li class='list-group-item'>Nombre del usuario: ".$usuario[0][1]."</li>";
echo "<li class='list-group-item'>Correo del usuario: ".$usuario[0][2]."</li>";
echo "<li class='list-group-item'>Rol del usuario: ".$usuario[0][4]."</li>";
echo "</ul>";
echo '</div>';
?>

<?php
include '../../template/Footer/footer.php';
?>