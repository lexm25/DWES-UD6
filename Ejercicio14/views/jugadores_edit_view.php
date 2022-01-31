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
        <nav>
            <ul>
                <li><a href="index.php?controller=jugadores&action=validarNuevoJugador">Nuevo elemento</a></li>
                <li><a href="index.php?controller=jugadores&action=mostrarTodo">Lista elementos</a></li>
                <li><a href="index.php?controller=usuarios&action=cerrarSesion">Cerrar Sesión</a></li>
            </ul>
        </nav>
        <form class="form-register" method="POST" enctype="multipart/form-data" action="index.php?controller=jugadores&action=validarEditarJugador">
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