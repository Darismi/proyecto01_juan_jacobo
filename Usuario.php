<?php

class Usuario {

	public $nombre;	
	public $apellido ;
	
	
	
	public function __construct($nom, $ape) {
		$nombre = $nom;		
		$apellido = $ape;		
	}
	

	public function saludar() {
		echo "Hola ".$this->nombre." ".$this->apellido;
	}

	public function registrar() {
		echo $this->nombre." ".$this->apellido." Registrado";
		return $this;
	}

	public function enviarEmail(){
		echo "Email enviado";
	}

	public function setNombre($nom) {
		$this->nombre = $nom;
	}

	public function getNombre() {
		return $this->nombre;
	}

	public function getNombreCompleto(){
		return $this->nombre." ".$this->apellido;
	}


}

