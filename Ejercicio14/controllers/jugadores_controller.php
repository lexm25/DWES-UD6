<?php
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
    
    function editarJugador(){
        require 'models/jugadores_model.php';
        
        include 'views/jugadores_edit_view.php'; 
    }
    
    function eliminarJugador(){
        require 'models/jugadores_model.php';
        $jugador = eliminarElemento($_GET['id']);
        include 'views/jugadores_delete_view.php'; 
    }
?>