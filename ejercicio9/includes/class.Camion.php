<?php
    class Camion extends Cuatro_Ruedas{
        private float $longitud;

        public function anyadir_remolque($longitud_remolque){
            $this->longitud += $longitud_remolque;
        }

        public function __construct($color,$peso,$numero_puertas,$longitud_remolque){
            parent::__construct($color,$peso,$numero_puertas);
            $this->longitud_remolque = $longitud_remolque;
        }

        public function __get($name){
            if(property_exists(get_class(),$name)){
                return $this->$name;
            }
            else{
                return parent::__get($name);
            }
        }

        public function __set($name, $value){
            if(property_exists(get_class(),$name)){
                $this->$name = $value;
            }
            else{
                parent::__set($name,$value);
            }
        }
    }
?>