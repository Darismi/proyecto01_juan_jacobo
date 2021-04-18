<?php
    
    class TestDrive {

        public function testDrive(){

            $argumento = 100;            
            $conducir = new Conducir();
            
            $reflection = new ReflectionClass(Conducir::class);
            $metodo = $reflection->getMethod('conduci');
            $metodo->setAccessible(true);

            $resultado = $metodo->invokeArgs($conducir, [$argumento]);

            echo "<br/>".$resultado;

        }
    }