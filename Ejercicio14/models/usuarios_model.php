<?php 
    function creaConexion(){
        $servidor = "localhost";
        $baseDatos = "nba";
        $usuario = "developer";
        $pass = "developer";
        return new PDO("mysql:host=$servidor;dbname=$baseDatos","$usuario","$pass");
    }

    function getUser($nombre) {
        try {
            $conexion = creaConexion();
            $sql = $conexion->prepare("SELECT * FROM usuarios WHERE nombre= ?");
            $sql->bindParam(1, $nombre);

            $sql->execute();

            $user = $sql->fetch();

        } catch (PDOException $e) {
            $e->getMessage();
        }

        $stmt = null;

        return $user;
    }

    function login($user, $password) {
        // Obtenemos el usuario solicitado.
        $user = getUser($user);
        $result = false;
        // Comprobamos si hemos conseguido obtener un usuario con los datos dados.
        if ($user) {
            // Y realizamos la verificacion de la contraseña.
            $result = password_verify($password, $user['contrasenya']);
        }
        return $result;
    }

?>