<?php
    abstract class Vehiculo implements IVehiculo{
        private string $color;
        private float $peso;
        protected static $num_cambio_color = 0;

        public function __construct($color,$peso){
            $this->color=$color;
            $this->peso=$peso;
        }

        public function __get($name){
            return $this->$name;
        }

        public function __set($name, $value){
            if($name == "peso" && $value>2100){
                echo "El peso total del coche no puede exceder 2100";
            }
            else{
                $this->$name = $value;
            }
        }

        public static function circula(){
            echo "El vehículo está circulando<br>";
        }

        abstract protected function anyadir_persona($peso_persona);

        public static function ver_atributo($object){
            var_dump($object);
            foreach ($object as $key) {
                echo $key . "<br>";
            }
        }

        public function setColor($num_cambio_color){
            $this->num_cambio_color = $num_cambio_color;
        }

    }
?>