<?php

abstract class Persona {

    protected $nombre;
    protected $sexo;
    protected $edad;

    abstract public function getNombre();
    abstract public function getSexo();
    abstract public function getEdad();
    

}