<?php

class FactoryWriter {

    public static function getWriter($tipo){
        $class = $tipo.'Writerr';
        if(class_exists($class)){
            return new $class();
        }
        throw new Exception();
    }

}