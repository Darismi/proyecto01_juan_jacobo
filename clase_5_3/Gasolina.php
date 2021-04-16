<?php

class Gasolina {

    public function calcularGasto($distancia, $gasolina){
        if($gasolina <= 0){
            throw new Exception("<br/>El gasto de gasolina
            no puede ser menor o igual a cero.
            <br/> Será mejor que tome un café o un descanso");
        }
        return $distancia / $gasolina;
    }

}