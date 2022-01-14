<?php
    function __autoload($name) {
        include_once 'includes/class.' . $name . '.php';
    }
    $coche = new Coche('azul',650,2,2);
    $coche->anyadir_persona(700);
    echo "El color del coche es: " . $coche->color . " y el peso es de: " . $coche->peso . "<br>";

    $coche->repintar("amarillo");
    $coche->anyadir_cadenas_nieve(3);
    echo "El color del coche es: " . $coche->color . " y tiene " . $coche->numero_cadenas_nieve . " cadenas de nieve<br>";

    $moto = new Dos_Ruedas("marrón",30,150);
    $moto->anyadir_persona(2);
    $moto->poner_gasolina(2000);
    echo "El color de la moto es: " . $moto->color . " y el peso es de: " . $moto->peso . "<br>";
?>