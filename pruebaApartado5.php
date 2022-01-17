<?php 
    //métodos para incluir las clases
    function __autoload($name) {
        include_once 'ejercicio9/includes/class.' . $name . '.php';
        include_once 'ejercicio9/includes/interface.' . $name . '.php';
    }
    //casa
    //spl_autoload_register(function($name){include_once('ejercicio9/includes/class.' . $name . '.php');});

    $coche = new Coche("verde",2100,4,2);
    $coche->anyadir_persona(80);
    $coche->repintar("azul");
    $coche->quitar_cadenas_nieve(4);
    $coche->repintar("negro");
    Vehiculo::ver_atributo($coche);
?>