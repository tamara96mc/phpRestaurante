<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();
$busqueda = $mysqli->query("SELECT * FROM usuarios WHERE (nombre ='".$_POST["nombre"]."' AND correo = '".$_POST["correo"]."')");
$usuario = $busqueda->fetch_all();
if(!$usuario){
    include '../../template/Header/header.php';
    echo "<h1>Ha habido un error al intentar encontrar al usuario en la base de datos</h1>";
    echo "<a href='./RecuperarContraseña.php'>Volver a Recuperar Contraseña</a>";
    include '../../template/Footer/footer.php';
}else{
    $resultado = $mysqli->query("UPDATE usuarios SET contraseña='".$_POST["contraseña"]."' WHERE (nombre ='".$_POST["nombre"]."' AND correo = '".$_POST["correo"]."')");
    header('Location: http://localhost/dev/phpRestaurante/pages/Login/Login.php');
}
?>