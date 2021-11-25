<?php 
function conectar(){
    $mysqli = new mysqli("172.16.8.230:6666", "root" ,"root123", "restaurante");
    //control de errores
    if($mysqli->connect_errno){
        echo "Fallo la conexión (' . $mysqli->connect_errno . ') " . $mysqli->connect_errno;
    }
    return $mysqli;
}