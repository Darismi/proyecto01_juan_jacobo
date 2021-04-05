<?php
    require 'Administrador.php';
    class RecursosHumanos extends Administrador{
        public function definirArea(){
            return "<br/>Area de Recursos Humanos: ".$this->getSalario();
        }
    }