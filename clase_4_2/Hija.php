<?php
    class Hija {
        private $plata = 0;

        public function gastarPlata() {

            if ($this->plata > 0){
                echo "Gastando 1000 <br/>";
                $this->plata -= 1000;
                return 1000;
            }else {
                echo "no tengo plata. Mami dame plata. <br/>";
                return 0;
            }
            
        }

        public function pedirPlata($platica) {
            if(!($platica > 10000)){
                echo "Mami dame más plata. <br/>";
            }else{
                $this->plata += $platica;
                echo "Te amo Mami. <br/>";
            }
        }

        public function mostrarPlata() {
            echo "Mami, tengo: ".$this->plata." <br/>";
        }
        

    }