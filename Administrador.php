<?php
    
    //require 'Usuario.php'; //:c parce no se que hacer, le presentamos o que?


    abstract class Administrador extends Usuario { 
        public $cargo = "Administrador";
        //public $nombre = "modificado";
        //public $apellido = "modificado";
        protected $salario;

        
                                               
        public function mostrarSuCargo(){
            return $this->cargo;
        }

        /*
        public function saludar(){
            echo "Hola administrador ".$this->nombre." ".$this->apellido;
        }
        */
        

        abstract public function definirArea();

        public function getSalario(){
            return $this->salario;
        }

        public function setSalario($s){
            $this->salario = $s;
        }
            
    }