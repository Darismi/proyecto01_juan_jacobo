<?php

    class Conducir{

        protected function conduci($kilometros){
            return "Conduciendo a ".$kilometros." por hora.";
        }

        private static function parar(){
            return true;
        }


    }