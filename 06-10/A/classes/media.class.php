<?php

abstract class Media {
    public $nota1; 
    public $nota2;
    abstract public function getMedia ();
    abstract public function mostrarMedia ($tipo);
    public function setNotas ($a , $b) { 
        $this->nota1 = $a;
        $this->nota2 = $b; 
    } 
}

class MediaG extends Media {
    public function getMedia() {
        return sqrt($this->nota1 * $this->nota2) / 2; 
    }

    public function mostrarMedia ($tipo) {
        echo "<br>" . $tipo . ": ". $this->getMedia(); 
    } 
}
    
class MediaA extends Media {
    public function getMedia() {
        return ($this->nota1 + $this->nota2) / 2; 
    }

    public function mostrarMedia ($tipo) {
        echo "<br>" . $tipo . ": ". $this->getMedia(); 
    } 
}

$m = new MediaG; 
$m->setNotas(4,6); 
$m->mostrarMedia("Geométrica");
$A = new MediaA; 
$A->setNotas(8,6); 
$A->mostrarMedia("Aritmética");