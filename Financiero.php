<?php
    require 'Administrador.php';
    class Financiero extends Administrador{        

        public function definirArea(){
            return "<br/>Area financiera ".$this->getSalario();
        }


    }