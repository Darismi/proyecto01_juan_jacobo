<?php

class XMLWriterr implements Write {

    public function escribir(Articulo $a){
        $contenido = '';
        $contenido = '<articulo>';
        $contenido.= '<titulo>'.$a->getTitulo().'</titulo>';
        $contenido.= '<autor>'.$a->getAutor().'</autor>';
        $contenido.= '<fecha>'.$a->getFecha().'</fecha>';
        $contenido.= '<categoria>'.$a->getCategoria().'</categoria>';
        $contenido.= '</articulo>';
    return $contenido;
    }


}