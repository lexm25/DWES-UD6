<?php 
    function listar(){
        require 'models/libros_model.php';
        $libros = getLibros();
        include 'views/libros_listar.php';    
    }
?>