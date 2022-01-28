<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/form.css">
        <title>Crea elemento</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Página principal</a></li>
                <li><a class="active" href="create.php">Nuevo elemento</a></li>
                <li><a href="list.php">Lista elementos</a></li>
                <li><a href="import.php">Importar elementos</a></li>
            </ul>
        </nav>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="form-register" method="POST" enctype="multipart/form-data" action="index.php?controller=jugadores&action=validarNuevoJugador">
            <h2 class="form-titulo">Características:</h2>
            <div class="contenedor-inputs">
                <input type="text" name="nombre" placeholder="Nombre" class="input-100" required>
                <input type="text" name="equipo" placeholder="Equipo" class="input-100" required>
                <input type="text" name="nacionalidad" placeholder="Nacionalidad" class="input-100" required>
                <input type="number" name="edad" placeholder="Edad" class="input-48" required>
                <input type="number" name="altura" placeholder="Altura(cm)" class="input-48" required >
                <input type="date" name="fecha" placeholder="Fecha" class="input-100" required>
                <input type="file" name="avatar" accept="image/png, image/jpeg" class="input-100">
                <input type="submit" value="Registrar" class="btn-enviar">
                <div id="errores"></div>
            </div>
        </form>
    </body>
</html>