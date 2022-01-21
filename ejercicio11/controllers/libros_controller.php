<?php 
    function listar(){
        require 'models/libros_model.php';
        getLibros();
        include 'views/libros_listar.php';    
    }
    function mostrarLibro(){
        require 'models/libros_model.php';
        getLibro($_GET['id']);
        include 'views/libros_listar.php'; 
    }
?>