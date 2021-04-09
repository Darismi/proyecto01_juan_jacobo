<?php

class Articulo{

    private $titulo;
    private $autor;
    private $fecha;
    private $categoria;

    public function __construct($t, $a, $f, $c){
        $this->titulo = $t;
        $this->autor = $a;
        $this->fecha = $f;
        $this->categoria = $c;
    }

    public function write(Write $writ){
        return $writ->escribir($this);
        /*
        $contenido = '';
        if($tipo == 'XML'){
             $contenido = '<articulo>';
             $contenido.= '<titulo>'.$this->titulo.'</titulo>';
             $contenido.= '<autor>'.$this->autor.'</autor>';
             $contenido.= '<fecha>'.$this->fecha.'</fecha>';
             $contenido.= '<categoria>'.$this->categoria.'</categoria>';
             $contenido.= '</articulo>';
        } else if ($tipo == 'JSON'){
            $a = array('titulo' => $this->titulo,
                        'autor' => $this->autor,
                        'fecha' => $this->fecha,
                        'categoria' => $this->categoria
                    );
            $contenido = json_encode($a);        
        }
        return $contenido;
        */
    }

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function getCategoria(){
        return $this->categoria;
    }

}