<?php
    session_start();    
    if(empty($_SESSION['id'])){
        header("Location: index.php");
    }

    function mostrarTodo(){
        require 'models/jugadores_model.php';
        $jugadores = obtenerTodos();
        include 'views/jugadores_list_view.php'; 
    }
    
    function mostrarJugador(){
        require 'models/jugadores_model.php';
        $jugador = obtenerElemento($_GET['id']);
        include 'views/jugadores_view_view.php'; 
    }
    
    function cargarJugador(){
        require 'models/jugadores_model.php';
        $datos = obtenerElemento($_GET['id']);
        include 'views/jugadores_edit_view.php'; 
    }

    function validarEditarJugador(){
        require 'models/jugadores_model.php';
        $imagen = "";
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id=$_POST['id'];
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

            if(empty($file = $_FILES['avatar']['name'])){
                $datos = obtenerElemento($id);
                $file = $datos['Imagen'];
            }else{
                $file = $_FILES['avatar']['name'];
            }
            if($_FILES['avatar']['size']!=0){
                if(editarElemento($id,$nombre,$equipo,$nacionalidad,$edad,$altura,$fechaNacimiento,$file)){
                    move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file);
                    header("Location: index.php?controller=jugadores&action=mostrarJugador&id=$id");
                }
            }else{
                if(editarElemento($id,$nombre,$equipo,$nacionalidad,$edad,$altura,$fechaNacimiento,$file)){
                    header("Location: index.php?controller=jugadores&action=mostrarJugador&id=$id");
                }              
            }
       }
       include 'views/jugadores_edit_view.php'; 
    }

    function validarNuevoJugador(){
        require 'models/jugadores_model.php';
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(!empty($_POST["nombre"])){
                $nombre = $_POST["nombre"];
            }
            if(!empty($_POST["equipo"])){
                $equipo = $_POST["equipo"];
            }
            if(!empty($_POST["nacionalidad"])){
                $nacionalidad = $_POST["nacionalidad"];
            }
            if(!empty($_POST["edad"])){
                $edad = $_POST["edad"];
            }
            if(!empty($_POST["altura"])){
                $altura = $_POST["altura"];
            }
            if(!empty($_POST["fecha"])){
                $fecha = $_POST["fecha"];
            }
            if(!empty($_POST["avatar"])){
                $avatar = $_POST["avatar"];
            }
            
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
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["avatar"]["tmp_name"]);
                if($check !== false) {
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
            $uploadOk = 0;
            }
    
            // Check file size
            if ($_FILES["avatar"]["size"] > 500000) {
                $uploadOk = 0;
            }
    
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                $uploadOk = 0;
            }
    
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    echo"mover imagen";
                    $uploadOk = 1;
                } else {
                    $uploadOk = 0;
                }
            }
    
            $imagen = $_FILES["avatar"]["name"];
            $id=insertaElemento($nombre,$equipo,$nacionalidad,$edad,$altura,$fecha,$imagen);
            if($id > 0){
               //header("Location: index.php?controller=jugadores&action=mostrarJugador&id=$id");
            }else{
                $uploadOk = 0;
            }
        }
        include 'views/jugadores_create_view.php'; 
    }

    function eliminarJugador(){
        require 'models/jugadores_model.php';
        $jugador = eliminarElemento($_GET['id']);
        include 'views/jugadores_delete_view.php'; 
    }
?>