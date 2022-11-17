<?php

require_once __DIR__ . '/poligono.class.php';

class Circulo implements IPoligono {
    public $raio;
    public $pi;
    public $area;

    public function __construct($raio, $pi) {
        $this->raio = $raio;
        $this->pi = $pi;
    }

    public function calcularArea(IPoligono $obj) {
        $this->area = $this->pi * ($this->raio ** 2);
    }

    public function mostrarArea(IPoligono $obj): void {
        echo $this->area;
    }
}