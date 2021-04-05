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

        /*
        Acoplamiento fuerte se refiere a objetos que son dependientes unoss de otros, generalente no es bueno
        ya que el codigo no se puede adaptar a cambios

        acoplamiento debil es reducir esa dependencia.

        lo ideal es que las clases sean independientes una de la otra
        */
    }