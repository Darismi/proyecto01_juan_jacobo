<?php
    require 'Empleado.php';
    class Gerente extends Empleado {
        protected $departamento;

        public function __construct($nombre, $salario, $dep) {
            parent::__construct($nombre, $salario);
            $this->departamento = $dep;            
        }

        function dar_aumento($cantidad) {
            parent::dar_aumento($cantidad);
            print "Este empleado es un gerente <br/><br/>";            
        }
    }