<?php
    //http://localhost/DWES22/DWES-UD6/ejercicio13/index.php?controller=periodicos&action=mostrarPeriodico&id=2
    function mostrarPeriodico(){
        require 'models/periodicos_model.php';
        $datos = getPeriodico($_GET['id']);
        include 'views/periodicos_listar.php'; 
    }
?>