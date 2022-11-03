<?php

class Quadrado {
    private $lado;

    function setLados($lado):void {
        $this->lado = $lado;
    }

    function getArea() {
        echo 'Área do quadrado: ' . $this->lado ** 2;
    }
}

$qd = new Quadrado();
$qd->setLados(6);
$qd->getArea();

echo "<br>";

class Retangulo {
    private $altura;
    private $base;

    function setLados($altura, $base):void {
        $this->altura = $altura;
        $this->base = $base;
    }

    function getArea() {
        echo 'Área do retângulo: ' . $this->base * $this->altura;
    }
}

$qd = new Retangulo();
$qd->setLados(6, 8);
$qd->getArea();
