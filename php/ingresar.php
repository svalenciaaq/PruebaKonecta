<?php

include 'conexion.php';

if(isset($_POST['name']) && isset($_POST['dni']) && isset($_POST['tel']) && isset($_POST['date']) && isset($_POST['gen']) && isset($_POST['client']) && isset($_POST['sede'])){
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

 
$insert = "INSERT INTO asesor(name,dni,tel,date,gen,client,sede,edad) VALUE('$name' , '$dni' , '$tel' , '$date' , '$gen' , '$client' , '$sede' , '$ano_diferencia')";

$verificar_dni = mysqli_query($con, "SELECT * FROM users WHERE dni = '$dni'");
    if(mysqli_num_rows($verificar_dni) > 0){
    echo '<script>
    alert("el usuario ya esta registrado");
    window.history.go(-1);
    </script>';
    exit;
    }


$resultado = mysqli_query($con,$insert);
  
if(!$resultado){
    echo 'error al enviar';
}else{
    header('location:../index.php');
}