<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "bd_Konecta";


$con=mysqli_connect($host,$user,$password,$db);

if(!$con){
    echo "Error en la conexion";
}else{
    //echo "conectado correctamente";
}