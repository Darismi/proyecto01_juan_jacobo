<?php

    class StopTest {

        public function stopTest(){

            $reflection = new ReflectionClass(Conducir::class);
            $metodo = $reflection->getMethod('parar');
            $metodo->setAccessible(true);

            $resultado = ($metodo->invoke(null)== 1 ? "true":"false");

            echo "<br/>".$resultado;
        }
    }