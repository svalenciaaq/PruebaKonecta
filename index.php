
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Registro asesores</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src = "js/validar.js"></script>
    <script src = "js/calcular.js"></script>
    </head>
    <body>
        <header class= "cabezera">
        <div class= "container">
        <H1>Registro asesores</H1>
        </div>
        </header> 
    </body>
    <form action="php/ingresar.php" class= "form_register"  name="register" id ="myForm" method= "POST">
    <div class= "container_inputs">
    <label for="name">Nombre</label>
    <input type="text" name = "name" placeholder = "Nombre" class = "in"  id="name" >
    <label for="dni"> Cedula</label>
    <input type="text" name = "dni"  placeholder = "cedula" class = "in"  id="cedula">
    <label for="tel"> Telefono</label>
    <input type="text" name = "tel" placeholder = "Telefono" class = "in" id="tel">
    <label for="date"> Fecha de nacimiento</label>
    <input type="date" name = "date" placeholder = "Fecha de nacimiento" class = "in" id="date" >
    <label for="gen" class = "gen"> Genero</label>
    <select name="gen" class = "sel" id = "gen">
    <option value="Masculino">Masculino</option>
    <option value="Femenino" >Femenino</option>
    <option value="Otro">Otro</option>
    </select>
    <label for="client"> Cliente para el cual trabaja</label>
    <input type="text" name = "client" id = "client" placeholder = "Cliente" class = in id = "client">
    <label for="sede"> Sede </label>
    <select name="sede" class = "sel" id= "sede">
    <option value="Ruta N">Ruta N</option>
    <option value="Puerto seco" >Puerto seco</option>
    <option value="Buro">Buro</option>
    </select>
    <input type="button" value="enviar" class = "btn_enviar" onclick="validar()" >
    <a href="mostrar.php" class = "btn">Mostrar</a>
    </div>
    </form>
</html>