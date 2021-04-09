<?php

require 'Write.php';
class JSONWriterr implements Write{

    public function escribir(Articulo $a){
        $arr = array('titulo' => $a->getTitulo(),
                        'autor' => $a->getAutor(),
                        'fecha' => $a->getFecha(),
                        'categoria' => $a->getCategoria()
                    );
            $contenido = json_encode($arr);        
    return $contenido;
    }


}