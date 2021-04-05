<?php 

    class GestorArchivoDeudores {
        private $archivo;

        public function abrirArchivo() {
            try {
                $this->archivo = fopen("personas2.txt", "rb");
            } catch (Exception $e) {
                echo "Exception: ".$e->getMessage();
            }
        }

        public function mostrarDeudores(){
            echo "<br />";
            try {
                while (!feof($this->archivo)) {
                    $datos = fgets($this->archivo);
                    list($cedu, $nom1, $nom2, $ape1, $ape2, $corr, $deu) = explode(" ",$datos);
                    echo $cedu." ".$nom1." ".$nom2." ".$ape1." ".$ape2." ".$corr." ".$deu."<br />";
                }
            } catch (Exception $e) {
                echo "Exception: ".$e->getMessage();
            }
        }

        public function mostrarDeudor($cedula){
            echo "<br />";
            try {
                $tiene_persona = false;    
                while (!feof($this->archivo)) {                             
                    $datos = fgets($this->archivo);
                    list($cedu, $nom1, $nom2, $ape1, $ape2, $corr, $deu) = explode(" ",$datos);
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

        public function mostrarRanking() {
            $deudores = array();
            echo "<br />";            
            try {
                while (!feof($this->archivo)) {
                    $datos = fgets($this->archivo);
                    list($cedu, $nom1, $nom2, $ape1, $ape2, $corr, $deu) = explode(" ",$datos);
                    array_push($deudores, array("n1"=>$nom1, "n2"=>$nom2, "a1"=>$ape1, "a2"=>$ape2, "d"=>$deu));                    
                }
                foreach ($deudores as $key => $row) {
                    $d[$key] = $row['d'];                    
                }
                array_multisort($d, SORT_DESC, $deudores);
                foreach ($deudores as $deu) {
                    echo "<br />";            
                    foreach ($deu as $k=>$v) {
                        echo " ".$v;
                    }
                }
            } catch (Exception $e) {
                echo "Exception: ".$e->getMessage();
            }
        }

    }