<?php

interface IPoligono {
    public function mostrarArea(IPoligono $obj): void;
    public function calcularArea(IPoligono $obj);
}