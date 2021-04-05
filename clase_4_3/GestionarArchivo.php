<?php
    
    class GestionarArchivo {
        
        private $archivo;

        public function getArchivo(){
            return $this->archivo;
        }

        public function abrirArchivo(){
            try {
                $this->archivo = fopen("personas2.txt", "rb");
            } catch (Exception $e) {
                echo "Exception: ".$e->getMessage();
            }
        }
    }