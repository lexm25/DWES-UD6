<?php
    $coche = new Vehiculo("rojo",450);
    $coche->circula();
    echo $coche->peso;
    $coche->anyadir_persona(50);
    $coche->anyadir_persona(60);
    echo $coche->peso;
?>