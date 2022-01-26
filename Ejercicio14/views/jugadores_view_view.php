<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/botonera.css">
        <link rel="stylesheet" href="css/view.css">
        <title>Vista detalle</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="create.php">Nuevo elemento</a></li>
                <li><a class="active" href="index.php">Lista elementos</a></li>
            </ul>
        </nav>  

        <div class="container">
            <header>
                <div class="bio">
                    <img src="images/<?php echo $jugador["Imagen"]?>" alt="DATOS DEL JUGADOR" class="bg">
                    <div>
                        <h3><?php echo $jugador["Nombre"]?></h3>
                        <p><?php echo $jugador["Equipo"]?></p>  
                        <p><?php $jugador["Nacionalidad"]?></p>
                    </div>
                </div>
            </header>

            <div class="content">
                <div class="data">
                    <ul>
                        <li>
                            <?php echo $jugador["Edad"]?>
                            <span>Edad</span>
                        </li>
                        <li>
                            <?php echo $jugador["Altura"]?>
                            <span>Altura (cm)</span>
                        </li>
                        <li>
                        <?php echo $jugador["Nacimiento"]?> 
                            <span>Fecha</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>