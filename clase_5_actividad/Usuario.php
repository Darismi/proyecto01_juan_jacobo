<?php
    
    class Usuario extends Persona{
            
        //private $radioTanque;
        

        public function __construct($nombre, $sexo, $edad) {
            if(strlen($nombre) <= 3){
                throw new Exception("<br/>El nombre no puede tener menos de 4 letras.");
            } else {
                $this->nombre = $nombre;
            }      

            $this->sexo = $sexo;
            
            if($edad <= 0){
                throw new Exception("<br/>La edad no puede ser menor o igual a cero.");
            } else {
                $this->edad = $edad;
            } 
        }

        public function getNombre() {
            return $this->nombre;
        }
    
        public function getSexo() {
            return $this->sexo;
        }
    
        public function getEdad() {
            return $this->edad;
        }

    }