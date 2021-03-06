<?php
    class Local{
        private string $ciudad;
        private string $calle;
        private int $numPlantas;
        private Dimensiones $dimensiones;

        public function __construct($ciudad,$calle,$numPlantas,$dimensiones){
            $this->ciudad=$ciudad;
            $this->calle=$calle;
            $this->numPlantas=$numPlantas;
            $this->dimensiones=$dimensiones;
        }

        public function __set($name, $value){
            if($name != "numPlantas" && $name!="dimensiones"){
                $this->$name=$value;
            }
            else if($name == "numPlantas"){
                if($value>0 && $value<11){
                $this->$name=$value;
                }
                else{
                    echo "Error, el numero de plantas debe estar entre 1 y 10";
                    die();
                }
            }
            else if($name == "dimensiones"){
                if($name instanceof Dimensiones){
                    $this->$name=$value;
                }
                else{
                    echo "Error, dimensiones no es una instancia de Dimensiones";
                    die();
                }
            }
            else{
                echo "Error";
                die();
            }
        }

        public function __get($name){ 
            return $this->$name;
        }

        public function __toString(){
            return "<p>Ciudad: " . $this->ciudad . "<br></p>Calle: " .  $this->calle . "<br></p>Plantas: " . $this->numPlantas . "<br></p>Dimensiones: (" . $this->dimensiones . ")<br></p>";
        }

        public function __clone(){
            $this->dimensiones = clone $this->dimensiones;
        }
    }
?>