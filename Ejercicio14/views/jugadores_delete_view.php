<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#">Nuevo elemento</a></li>
            <li><a class="active" href="index.php">Lista elementos</a></li>
        </ul>
        <p>
            <?php 
            $id = $_GET["id"];
            if(eliminarElemento($id)){
                echo "Jugador eliminado con éxito";
            }
            else{
                echo "Error, no ha sido posible eliminar al jugador, reinténtelo";
            }
            ?>
        </p>
    </nav>
</body>
</html>