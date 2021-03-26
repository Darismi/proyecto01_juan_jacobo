<?php
    include 'Car.php';
    
    class Deportivo extends Car{
        private $estilo = "Rápido y furioso";
        public $tieneCapota = false;
        protected $modelo = "modificado";

        public function conducirConEstilo(){
            return "Conducir un ".$this->getModelo(). "<i>" .$this->estilo. "</i>";
        }

        public function verMiModelo(){
            echo "<br /> Desde la Clase hija: ".$this->modelo;
        }

        /*
        public function getModelo(){
            return "<br /> El nuevo modelo es: ".$this->modelo;
        }
        */

        public function calcNumKilomConTanqueLleno(){
            
        }
    }