<?php    

    class Carro {

        private $modelo;
        private $tieneTechoCorredizo;
        private $numeroDePuertas;
        private $precio;
        private $volumenTanque = 0;
        private $conductor;

        public function __construct( string $modelo,
                                    bool $tieneTechoCorredizo, 
                                    int $numeroDePuertas, 
                                    int $precio,
                                    float $volumenTanque,
                                    Conductor $conductor )  {

            $this->modelo = $modelo;
            $this->tieneTechoCorredizo = $tieneTechoCorredizo;
            $this->numeroDePuertas = $numeroDePuertas;
            $this->precio = $precio;
            $this->volumenTanque = $volumenTanque;
            $this->conductor = $conductor;
            
        }

        // implementación de metodos get y set de los tributos privados de la clase Carro
        public function setModelo(string $modelo) {
            $this->modelo = $modelo;
        }
        public function getModelo() {
            return $this->modelo;
        }

        public function setTieneTechoCorredizo(bool $TieneTechoCorredizo) {
            $this->TieneTechoCorredizo = $TieneTechoCorredizo;
        }
        public function getTieneTechoCorredizo() {
            return $this->TieneTechoCorredizo;
        }

        public function setnumeroDePuerta(int $numeroDePuerta) {
            $this->numeroDePuerta = $numeroDePuerta;
        }
        public function getnumeroDePuerta() {
            return $this->numeroDePuerta;
        }

        public function setPrecio(int $Precio) {
            $this->Precio = $Precio;
        }
        public function getPrecio() {
            return $this->Precio;
        }

        public function setvolumenTanque(float $volumenTanque) {
            $this->volumenTanque = $volumenTanque;
        }
        public function getvolumenTanque() {
            return $this->volumenTanque;
        }


        public function calcNumKilTanqueLleno(){
            $kilometro = $this->volumenTanque*30;
            return $kilometro;
        }

    }