<?php
class Car {

	public $empresa;
	public $color = "rojo";
	public $tieneCapota = "true";
	public $contenidoTanque;
	private $modelo = "Sin definir";

	public function __construct($mod = "Sin definir"){
		if($mod != "Sin definir"){
			$this -> modelo = $mod;
		}
		
	}

	private $modelos_permitidos = array("audi", "mazda", "mercedez", "lamborgini");

	public function pitar(){
		return "beep";
	}
	
	public function pedirRevision(){
		return "Soy un carro de marca ".$this->empresa. " necesito una revisión.
				<br/> Necesito repintar mi color ". $this->color. " ". $this -> pitar();
	}

	public function levantarCapota(){
		if ($this->tieneCapota){
			return "Levantando la capota";
		}else{
			return "No tengo capota para levantar";
		} 
	}

	public function llenar($cantidad){
		$this -> contenidoTanque += $cantidad;
		return $this;
	}

	public function correr($kilometros){
		$galonesConsumidos = $kilometros / 50;
		$this -> contenidoTanque -= $galonesConsumidos;
		return $this;
	}

	public function getModelo(){
		return "El <b>" . __CLASS__ . "</b> tiene el modelo: ". $this -> modelo;
	}

	public function setModelo($mod){
		if(in_array($mod, $this->modelos_permitidos)) $this -> modelo = $mod;
		else $this -> modelo = "sin definir";
	}
	
}
