<?php
    
    class Mercedes extends Carro{
            
        private $radioTanque;
        

        public function __construct($placa, $radio, $altura) {        
            $this->placa = $placa;
            $this->radioTanque = $radio;
            $this->alturaTanque = $altura;
        }

        public function calcVolumenTanq() {
            return $this->radioTanque*$this->radioTanque*pi()*$this->alturaTanque;
        }
    }