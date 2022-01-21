<?php 
    class Cine extends LocalComercial{
        private int $aforoSala;

        public function __construct($ciudad,$calle,$numPlantas,$dimensiones,$razonSocial,$numLicencia,$aforoSala){
            $this->aforoSala = $aforoSala;
            parent::__construct($ciudad,$calle,$numPlantas,$dimensiones,$razonSocial,$numLicencia);
        }

        public function __set($name, $value){
            if($name!="aforoSala"){
                $this->$name = $value;
            }
            else if($value > 0){
                $this->$name = $value;
            }
            else{
                echo $value;
                echo "ERROR, el aforo debe ser mayor a 0";
                die();
            }
        }
        
        public function __toString(){
            return "<p>" . parent::__toString() . "Aforo: " . $this->aforoSala . "<br></p>";
        }
    } 
?>