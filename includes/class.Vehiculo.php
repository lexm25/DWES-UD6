<?php
    class Vehiculo{
        private string $color;
        private float $peso;

        public function circula(){
            echo "El vehículo está circulando";
        }

        public function anyadir_persona($peso_persona){
            $this->peso += $peso_persona;
        }

        public function __construct($color,$peso){
            $this->color=$color;
            $this->peso=$peso;
        }
    }
?>