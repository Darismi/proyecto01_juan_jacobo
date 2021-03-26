<?php
    include 'Usuario.php';
    
    class Administrador extends Usuario{
        public $cargo = "Administrador";
        
        public function mostrarSuCargo(){
            return $cargo;
        }

        public function saludar(){
            return "Hola administrador ".$this->nombre." ".$this->apellido;
        }

    }