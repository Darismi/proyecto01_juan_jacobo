<?php
class Car {
	public $empresa;
	public $color = "rojo";
	public $tieneCapota = "true";

	public function pitar(){
		return "beep";
	}
	
	public function pedirRevision(){
		return "Soy un carro de marca".$this->empresa. " necesito una revisión.
				<br/> Necesito repintar mi color ". $this->color;
	}

	public function levantarCapota(){
		if ($this->tieneCapota){
			return "Levantando capota";
		}else{
			return "No tengo capota";
		} 
	}
	
}
