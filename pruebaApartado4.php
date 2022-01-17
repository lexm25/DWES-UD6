<?php
    //métodos para incluir las clases
    function __autoload($name) {
        include_once 'ejercicio9/includes/class.' . $name . '.php';
    }
    //casa
    //spl_autoload_register(function($name){include_once('includes/class.' . $name . '.php');});

    $dosRuedas = new Dos_Ruedas("transparente",1550,1000);
    $dosRuedas->anyadir_persona(70);
    $dosRuedas->color = "verde";
    $dosRuedas->ver_atributo($dosRuedas);

    $camion = new Camion("blanco",6000,2,12);
    $camion->anyadir_persona(84);
    $camion->ver_atributo($camion);
?>