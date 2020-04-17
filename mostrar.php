<?php
include "php/show.php";
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset = "UTF-8">
        <link rel="stylesheet" href="css/styles.css">
        <title>Mostrar</title>
        <script src = "js/prueba.js"></script>    
    </head>
    <body>
        <header class = "cabezera">
            <div class = "container">
                <h1>Mostrar datos</h1>
            </div>
        </header>
        <div class = "container">
            <table class = "table">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Cedula</td>
                        <td>Telefono</td>
                        <td>Fecha de nacimiento</td>
                        <td>Genero</td>
                        <td>Cliente</td>
                        <td>Sede</td>
                        <td>Edad</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($filas = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $filas["name"]?></td>
                        <td><?php echo $filas["dni"]?></td>
                        <td><?php echo $filas["tel"]?></td>
                        <td class = "date"><?php echo $filas["date"]?></td>
                        <td><?php echo $filas["gen"]?></td>
                        <td><?php echo $filas["client"]?></td>
                        <td><?php echo $filas["sede"]?></td>
                        <td><?php echo $filas["edad"]?></td>
                        <td><a href="php/delete.php?id=<?php echo $filas["id"]; ?>" onclick =  "return confirm('¿Estas seguro?');">eliminar</a></td>
                        <td><a href="modificar.php?id=<?php echo $filas["id"]; ?>">editar</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class = "container">
                <div class ="container_btn">
                        <a href="index.php" class = "btn"> Regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>