<?php
    require 'Usuario.php';
    require 'ProgramadorFrontend';
    require 'ProgramadorBackend';
    
    class Programador extends Usuario implements ProgramadorFrontend, ProgramadorBackend{ 
        
        //public $lenguajes = array(3);
        private $lenguajes_backend = array();
        private $lenguajes_frontend = array(3);
        //se supone queaqsi es, no se porque no da gvon

        public function agregarLenguajeDeProgramacionBackend($lenguaje){
            array_push($lenguajes_backend, $lenguaje);                        
        }

        public function mostrarLenguajesDeProgramacionBackend(){
            foreach ($this->lenguajes_backend as $lenguajesIndex){
                echo $lenguajesIndex . " ";
            }
        }
        public function agregarLenguajeDeProgramacionFrontend($lenguaje){
            array_push($lenguajes_frontend, $lenguaje); 
        }//quien sabe que está mal
        
        public function mostrarLenguajesDeProgramacionFrontend(){
            foreach ($this->lenguajes_frontend as $lenguajesIndex){
                echo $lenguajesIndex . " ";
            }
        }


    }