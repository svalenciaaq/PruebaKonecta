<?php
include "php/conexion.php";

$id=$_GET["id"];
$query = "SELECT * FROM asesor WHERE id = $id";

$result=mysqli_query($con,$query);


$fila = mysqli_fetch_assoc($result);
if(isset($fila)){
 
    $name= $fila["name"];
    $dni = $fila["dni"];
    $tel = $fila["tel"];
    $date = $fila["date"];
    $gen = $fila["gen"];
    $client = $fila["client"];
    $sede = $fila["sede"]; 
}
?>

<!DOCTYPE hmtl>
<html>
    <head>
    <meta charset= "UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <title>Modificar</title>
    <script src="js/validarUpdate.js"></script>
    <script src = "js/calcular.js"></script>
    </head>
    <body>
        <header class = "cabezera">
            <div class = "container">

                <h1>Modificar asesor</h1>
            </div>

        </header>
        <form action="php/edit.php" method="POST" class ="form_del" name = "delete" id="formDel" >
            <div class = "container_inputs">
            <label for="name">Nombre</label>
            <input type="text" name = "name" placeholder = "Nombre" class = "in"  id="name" value ="<?php echo $name?>">
            <label for="dni"> Cedula</label>
            <input type="text" name = "dni"  placeholder = "cedula" class = "in"  id="cedula" value = "<?php echo $dni?>">
            <label for="tel"> Telefono</label>
            <input type="text" name = "tel" placeholder = "Telefono" class = "in" id="tel" value = "<?php echo $tel?>">
            <label for="date"> Fecha de nacimiento</label>
            <input type="date" name = "date" placeholder = "Fecha de nacimiento" class = "in" id="date" value= "<?php echo $date?>" >
            <label for="gen" class = "gen"> Genero</label>
            <select name="gen" class = "sel" id = "gen">
            <option value="Masculino">Masculino</option>
            <option value="Femenino" >Femenino</option>
            <option value="Otro">Otro</option>
            </select>
            <label for="client"> Cliente para el cual trabaja</label>
            <input type="text" name = "client" id = "client" placeholder = "Cliente" class = in id = "client" value="<?php echo $client?>">
            <label for="sede"> Sede </label>
            <select name="sede" class = "sel" id= "sede">
            <option value="Ruta N">Ruta N</option>
            <option value="Puerto seco" >Puerto seco</option>
            <option value="Buro">Buro</option>
            </select>
            <input type="hidden"  name = "id" id = "id" value="<?php echo $id?>">
            <input type="button" value= "enviar" onclick = "return validarUpdate();" class = "btn_enviar">
            <a href="mostrar.php" class = "btn"> Regresar</a>
            </div>
        </form>
        
    </body>    
</html>