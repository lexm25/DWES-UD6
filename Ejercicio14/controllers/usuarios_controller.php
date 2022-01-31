<?php
    function ventanaLogin(){
        require 'models/usuarios_model.php';
        $error = "";
        if (isset($_SESSION['id'])) {
            header("Location: index.php?controller=jugadores&action=mostrarTodo");
        }
        include 'views/usuarios_login_view.php';
    }

    function validarLogin(){
        require 'models/usuarios_model.php';
        session_start();
        var_dump($_SESSION['id']);
        // Comprobamos si ya hay una sesion activa y redireccionamos en caso afirmativo.
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (login($_POST['nombre'], $_POST['pass'])) {
                $id = getUser($_POST['nombre']);
                $_SESSION['id'] = $id['id'];
                    
                header("Location: index.php?controller=jugadores&action=mostrarTodo");
            }
            else {
                $error = "<p style='color:red'>Contraseña incorrecta</p>";
                include 'views/usuarios_login_view.php';
            }
        }
        
    }

    function cerrarSesion(){
        session_destroy();

        header("Location: index.php");
    }

?>