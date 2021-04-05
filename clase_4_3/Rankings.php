<?php

class Rankings {
    
    private $archivo;

    public function __construct(){
        $this->archivo = new GestionarArchivo();
        $this->archivo->abrirArchivo();
    }

    public function mostrarRanking() {
        $deudores = array();        
        echo "<br />";            
        try {
            while (!feof($this->archivo->getArchivo())) {
                $datos = fgets($this->archivo->getArchivo());
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