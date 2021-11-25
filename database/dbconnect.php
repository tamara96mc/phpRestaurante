<?php 
function conectar(){
    $mysqli = new mysqli("127.0.0.1:6666", "root" ,"root123", "restaurante");
    //control de errores
    if($mysqli->connect_errno){
        echo "Fallo la conexión (' . $mysqli->connect_errno . ') " . $mysqli->connect_errno;
    }
    return $mysqli;
}