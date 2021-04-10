<?php
    
    
    class Bmw extends Carro{
        
        private $anchoTanque;

        public function __construct($placa, $ancho, $altura) {
            $this->placa = $placa;
            $this->anchoTanque = $ancho;
            $this->alturaTanque = $altura;
        }

        public function calcVolumenTanq(){
            return $this->anchoTanque*$this->anchoTanque*$this->alturaTanque;
        }

    }