<?php
    class Dos_Ruedas extends Vehiculo{
        private int $cilindrada;


        public function poner_gasolina($litros){
            $this->peso += ($litros*1.5);
        }
    }

?>