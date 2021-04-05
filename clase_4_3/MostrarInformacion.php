<?php
    
    require 'GestionarArchivo.php';

    class MostrarInformacion {
        
        private $archivo;

        public function __construct() {
            $this->archivo = new GestionarArchivo();
            $this->archivo->abrirArchivo();            
        }
        
        public function mostrarDeudores(){            
            echo "<br />";
            $this->archivo->abrirArchivo();
            try {
                while (!feof($this->archivo->getArchivo())) {
                    $datos = fgets($this->archivo->getArchivo());
                    list($cedu, $nom1, $nom2, $ape1, $ape2, $corr, $deu) = explode(" ",$datos);
                    echo $cedu." ".$nom1." ".$nom2." ".$ape1." ".$ape2." ".$corr." ".$deu."<br />";
                }
            } catch (Exception $e) {
                echo "Exception: ".$e->getMessage();
            }
        }

        public function mostrarDeudor($cedula){
            echo "<br />";
            $this->archivo->abrirArchivo();
            try {
                $tiene_persona = false;    
                while (!feof($this->archivo->getArchivo())) {                             
                    $datos = fgets($this->archivo->getArchivo());
                    list($cedu, $nom1, $nom2, $ape1, $ape2, $corr, $deu) = explode(" ",$datos);
                    //echo "hola ".$cedu;
                    if ($cedu == $cedula){
                        echo $cedu." ".$nom1." ".$nom2." ".$ape1." ".$ape2." ".$corr." ".$deu."<br />";
                        $tiene_persona = true;
                        break;
                    }                
                }
                if (!$tiene_persona) {
                    echo "<br /> no existe el deudor con cédula: ".$cedula." <br />";                    
                }
                
            } catch (Exception $e) {
                echo "Exception: ".$e->getMessage();
            }
            
        }
    }