<?php
//CONECTAR CON BASE DE DATOS
require '../../database/dbconnect.php';
$mysqli = conectar();

//HAGO CONSULTA A BASE DE DATOS PARA BUSCAR EL USUARIO LOGADO CON CORREO Y CONTRASEÑA
$resultado = $mysqli->query("SELECT * FROM usuarios WHERE (correo ='".$_POST["correo"]."' AND contraseña = '".$_POST["contraseña"]."')");

//GUARDO RESULTADO DE LA CONSULTA EN VARIABLE USUARIO
$usuario = $resultado->fetch_all();
?>