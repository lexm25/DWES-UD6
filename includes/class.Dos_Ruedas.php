<?php
    class Dos_Ruedas extends Vehiculo{
        private int $cilindrada;
        
        public function poner_gasolina($litros){
            $this->peso += ($litros * 1.5);
        }

        public function __construct($color,$peso,$cilindrada){
            parent::__construct($color,$peso);
            $this->cilindrada = $cilindrada;
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