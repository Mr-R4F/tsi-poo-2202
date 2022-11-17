<?php

require_once __DIR__ . '/poligono.class.php';

class Triangulo implements IPoligono {
    public $base;
    public $altura;
    public $area;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(IPoligono $obj) {
        $this->area = ($this->base * $this->altura) / 2;
    }

    public function mostrarArea(IPoligono $obj): void {
        echo $this->area;
    }
}