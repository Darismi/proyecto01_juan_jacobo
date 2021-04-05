<?php

    class Empleado {
        protected $enombre;
        protected $sal;

        function __construct($ename, $sal = 1000000) {
            $this->enombre = $ename;
            $this->sal = $sal;
        }

        function dar_aumento($cantidad){
            $this->sal += $cantidad;
            printf("Empleado %s obtuvo un aumento de %d pesos <br/>",$this->enombre, $cantidad);
            printf("Nuevo salario es de %d pesos <br/>",$this->sal);
        }
    }