<?php
    abstract class Vehiculo implements IVehiculo{
        private string $color;
        private float $peso;
        protected static int $num_cambio_color = 0;

        public function __construct($color,$peso){
            $this->color=$color;
            $this->peso=$peso;
        }

        public function __get($name){
            return $this->$name;
        }

        public function __set($name, $value){
            if($name == "color"){
                self::$num_cambio_color++;
                $this->$name = $value;
            }
            else if($name == "peso" && $value>2100){
                echo "El peso total del vehículo no puede exceder 2100<br>";
            }
            else{
                $this->$name = $value;
            }
        }

        public function circula(){
            echo "El vehículo está circulando<br>";
        }

        abstract protected function anyadir_persona($peso_persona);

        public static function ver_atributo($object){
            echo "Color: " . $object->color . "<br>";
            echo "Peso: " . $object->peso . "<br>";
            echo "Número de veces repintado: " . self::$num_cambio_color . "<br>";

            if (get_class($object) == "Cuatro_ruedas" || get_class($object) == "Coche" || get_class($object) == "Camion") {
                echo "Número de puertas: " . $object->numero_puertas . "<br>";
            }
        
            if (get_class($object) == "Coche") {
                echo "Número de cadenas de: " . $object->numero_cadenas_nieve . "<br>";
            }
        
            if (get_class($object) == "Dos_ruedas") {
                echo "Cilindrada: " . $object->cilindrada . "<br>";
            }
        
            if (get_class($object) == "Camion") {
                echo "Longitud: " . $object->longitud . "<br>";
            }
            
        }
    }
?>