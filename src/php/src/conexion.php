<?php

function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "detallositobd";

    $con = new mysqli($server, $user, $pass, $db);
    if(!$con){
        die("Error al conectar: ".mysqli_connect_error());
    }

    return $con;
}

?>