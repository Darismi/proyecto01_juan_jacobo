<?php

class Avion{

    protected $piloto;

    public function __construct(){        
    }

    public function setPiloto(InterfacePiloto $piloto){
        $this->piloto = $piloto;
    }

    public function getPiloto(){
        return $this->piloto;
    }



}