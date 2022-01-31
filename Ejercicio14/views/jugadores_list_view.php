<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/botonera.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Lista elementos</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=jugadores&action=validarNuevoJugador">Nuevo elemento</a></li>
            <li><a href="index.php?controller=jugadores&action=mostrarTodo">Lista elementos</a></li>
                <li><a href="index.php?controller=usuarios&action=cerrarSesion">Cerrar Sesión</a></li>
        </ul>
    </nav>
    <table class="styled-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Equipo</th>
                <th>Edad</th>
                <th>Fecha Nacimiento</th>
                <th>Detalles</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($jugadores as $valor){
                        echo "<tr>";
                        echo"<td>",$valor["Nombre"],"</td>";
                        echo"<td>",$valor["Equipo"],"</td>";
                        echo"<td>",$valor["Edad"],"</td>";
                        echo "<td>",$valor["Nacimiento"],"</td>";
                        $id = $valor["id"];
                        echo "<td><a href='index.php?controller=jugadores&action=mostrarJugador&id=$id'>Detalles</a></td>";
                        echo "<td><a href='index.php?controller=jugadores&action=cargarJugador&id=$id'>Editar</a></td>";
                        echo "<td><a href='index.php?controller=jugadores&action=eliminarJugador&id=$id'>Borrando</a></td>";
                        echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>