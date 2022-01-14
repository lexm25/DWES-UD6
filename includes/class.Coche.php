<?php
    class Coche extends Cuatro_Ruedas{
        private int $numero_cadenas_nieve;

        public function anyadir_cadenas_nieve($num){
            $this->numero_cadenas_nieve += $num;
        }

        public function quitar_cadenas_nieve($num){
            $this->numero_cadenas_nieve -= $num;
        }

        function __construct($color,$peso,$numero_puertas,$numero_cadenas_nieve){
            parent::__construct($color,$peso,$numero_puertas);
            $this->numero_cadenas_nieve =$numero_cadenas_nieve;
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