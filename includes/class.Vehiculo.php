<?php
    abstract class Vehiculo{
        private string $color;
        private float $peso;

        public function circula(){
            echo "El vehículo está circulando<br>";
        }

        abstract protected function anyadir_persona($peso_persona);

        public function __construct($color,$peso){
            $this->color=$color;
            $this->peso=$peso;
        }

        public function __get($name){
            return $this->$name;
        }

        public function __set($name, $value){
            $this->$name = $value;
        }

        public static function ver_atributo($object){
            var_dump($object);
            foreach ($object as $key) {
                echo $key . "<br>";
            }
        }
    }
?>