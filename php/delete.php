<?php

include "conexion.php";


$id = $_GET["id"];


$query="DELETE FROM asesor WHERE id = $id";

$result =mysqli_query($con,$query);


if(!$result){
    echo "fallo en la eliminacion";
}else{
    echo "Eliminacion satisfactoria";
    header("location:../mostrar.php");
}