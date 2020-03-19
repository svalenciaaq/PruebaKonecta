<?php 
include "conexion.php";


$query = "SELECT * FROM  asesor";


$result = mysqli_query($con, $query);

if(!$result){
    echo "Error en el query";
}else{
   // echo "datos correctos";
}