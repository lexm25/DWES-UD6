<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Edita elemento</title>
    </head>
    <body>
    <?php
        $idJugador = $_GET["id"];
        $datos = obtenerElemento($idJugador);

        $imagen = $datos["Imagen"];
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $nombre = $_POST["Nombre"];
            $equipo = $_POST["Equipo"];
            $nacionalidad = $_POST["Nacionalidad"];
            $edad = $_POST["Edad"];
            $altura = $_POST["Altura"];
            $fechaNacimiento = $_POST["Nacimiento"];
            
            $nombre = stripslashes($nombre);
            $nombre = strip_tags($nombre);
            $nombre = htmlspecialchars($nombre);
    
            $equipo = stripslashes($equipo);
            $equipo = strip_tags($equipo);
            $equipo = htmlspecialchars($equipo);
    
            $nacionalidad = stripslashes($nacionalidad);
            $nacionalidad = strip_tags($nacionalidad);
            $nacionalidad = htmlspecialchars($nacionalidad);

            $target_dir = "images/";
            $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
            
            if($_FILES['avatar']['size']!=0){
                $file = $_FILES['avatar']['name'];
                if(editarElemento($datos["id"],$nombre,$equipo,$nacionalidad,$edad,$altura,$fechaNacimiento,$file)){
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
                    header("Location: views/jugadores_view_view.php?id=$idJugador");
                }
            }else{
                if(editarElemento($datos["id"],$nombre,$equipo,$nacionalidad,$edad,$altura,$fechaNacimiento,$imagen)){
                    header("Location: views/jugadores_view_view.php?id=$idJugador");
                }
            }
       }
    ?>
        <nav>
            <ul>
                <li><a href="#">Nuevo elemento</a></li>
                <li><a class="active" href="index.php">Lista elementos</a></li>
            </ul>
        </nav>
        <form class="form-register" method="POST" enctype="multipart/form-data">
            <h2 class="form-titulo">DATOS DEL JUGADOR</h2>
            <div class="contenedor-inputs">
                <input type="hidden" name="id" value="<?php echo $datos["id"]?>">
                <input type="text" name="Nombre" placeholder="Nombre" class="input-100" value = "<?php echo $datos["Nombre"]; ?>" required>
                <input type="text" name="Equipo" placeholder="Equipo" class="input-100" value = "<?php echo $datos["Equipo"]; ?>" required>
                <input type="text" name="Nacionalidad" placeholder="Nacionalidad" class="input-100" value = "<?php echo $datos["Nacionalidad"]; ?>" required>
                <input type="number" name="Edad" placeholder="Edad" class="input-48" value = "<?php echo $datos["Edad"]; ?>" required>
                <input type="number" name="Altura" placeholder="Altura(cm)" class="input-48" value = "<?php echo $datos["Altura"]; ?>" required> 
                <input type="date" name="Nacimiento" placeholder="Fecha nacimiento" class="input-100" value = "<?php echo $datos["Nacimiento"]; ?>" required>
                <img name="avatarActual" width=200px src="images/<?php echo $datos["Imagen"];?>">
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100" >
                <input type="submit" value="Editar" class="btn-enviar">
                <div id="errores"></div>
            </div>
        </form>
    </body>
</html>