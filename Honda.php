<?php
    class Honda extends Car{
        
        public function calcNumKilomConTanqueLleno(){
            $kilometros = $this->contenidoTanque*33;
            return $kilometros;

        }
    }