<?php
    //métodos para incluir las clases
    function __autoload($name) {
        include_once 'ejercicio9/includes/class.' . $name . '.php';
    }
    //casa
    spl_autoload_register(function($name){include_once('includes/class.' . $name . '.php');});

    $coche = new Vehiculo("rojo",450);
    $coche->circula();
    echo $coche->peso . "<br>";
    // $coche->anyadir_persona(50);
    // $coche->anyadir_persona(60);
    echo $coche->peso . "<br>";
    
    $coche2 = new Cuatro_Ruedas("verde",235,5);
    echo $coche2->color;
    $coche2->repintar("azul");
    echo $coche2->color;

?>