<?php

include "conexion.php";


if(isset($_POST['name']) && isset($_POST['dni']) && isset($_POST['tel']) && isset($_POST['date']) && isset($_POST['gen']) && isset($_POST['client']) && isset($_POST['sede'])){
$id = $_POST["id"];
$name= $_POST["name"];
$dni = $_POST["dni"];
$tel = $_POST["tel"];
$date = $_POST["date"];
$gen = $_POST["gen"];
$client = $_POST["client"];
$sede = $_POST["sede"];
}else{
    echo '<script>
      alert("Faltan campos");
      window.history.go(-1);
      </script>';
      exit;
  }


list($ano,$mes,$dia) = explode("-",$date);
  $ano_diferencia  = date("Y") - $ano;
  $mes_diferencia = date("m") - $mes;
  $dia_diferencia   = date("d") - $dia;
  if ($dia_diferencia < 0 || $mes_diferencia < 0){
    $ano_diferencia--;
  }


$query = "UPDATE asesor SET name = '$name' , dni = '$dni' , tel = '$tel' , date = '$date' , gen =  '$gen' , client = '$client' , sede = '$sede' , edad = '$ano_diferencia' WHERE id = $id ";

$result=mysqli_query($con,$query);


if(!$result){
    echo "Error en el query";
}else{
   // echo "datos correctos";
     header("location: ../mostrar.php");
  
}