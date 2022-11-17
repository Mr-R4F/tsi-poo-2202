<?php

require_once __DIR__ . '/poligono.class.php';

class Pentagono implements IPoligono {
    public $lado;
    public $apotema;
    public $area;

    public function __construct($lado, $apotema) {
        $this->lado = $lado;
        $this->apotema = $apotema;
    }

    public function calcularArea(IPoligono $obj) {
        $this->area = (5 * $this->lado) * $this->apotema;
    }

    public function mostrarArea(IPoligono $obj): void {
        echo $this->area;
    }
}