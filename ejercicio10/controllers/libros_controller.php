<?php 
    //http://localhost/DWES22/DWES-UD6/ejercicio10/index.php?controller=libros&action=listar
    function listar(){
        require 'models/libros_model.php';
        $libros = getLibros();
        include 'views/libros_listar.php';    
    }
?>