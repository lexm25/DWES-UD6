<?php 
    class LocalComercial extends Local{
        private string $razonSocial;
        private string $numLicencia;

        public function __construct($ciudad,$calle,$numPlantas,$dimensiones,$razonSocial,$numLicencia){
            $this->razonSocial = $razonSocial;
            $this->numLicencia = $numLicencia;
            parent::__construct($ciudad,$calle,$numPlantas,$dimensiones);
        }

        public function __toString(){
            return "<p>" . parent::__toString() . "</p></p>Razón Social: " .  $this->razonSocial . "<br></p><p>Numero de Licencia: " . $this->numLicencia . "<br></p>";
        }
    }
?>