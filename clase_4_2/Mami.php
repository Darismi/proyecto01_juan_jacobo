<?php

    class Mami {
        private $hijita;

        public function __construct($hija) {
            //$this->hijita = new Hija();    
            $this->hijita = $hija;
        }

        public function darPlata($platica) {
            echo "Toma esta platica ".$platica." <br/>";
            //$this->hijita->plata += $platica;
            $this->hijita->pedirPlata($platica);
        }

        public function muestrameTuPlata() {
            echo "<br/>Mami me queda esta platica ".$this->hijita->mostrarPlata()." <br/>";
        }

    }
    