<?php

class Visitas {
    static public $numeroVisitas = 0;

    static public function agregarNumVisitas($num){
        self::$numeroVisitas += (int)$num;
    }

    static public function redirect($url){
        header("Location: $url");
        exit;
    }


}