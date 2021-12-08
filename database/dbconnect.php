<?php 
function conectar(){
    $mysqli = new mysqli("eu-cdbr-west-01.cleardb.com:3306", "b4e8baf17e1d4d" ,"69588d94", "heroku_79f32450b0f48e1");
    //control de errores
    if($mysqli->connect_errno){
        echo "Fallo la conexión (' . $mysqli->connect_errno . ') " . $mysqli->connect_errno;
    }
    return $mysqli;
}