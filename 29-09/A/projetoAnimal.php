<?php

//funções com o mesmo nome pode usar
abstract class Animal { //mãe
    abstract public function locomover(); // método abstrato (sem funcionalidade ainda)

    public function organismo($animal) {
        echo "<br>(A)/(O) $animal é um organismo Pluricelular ";
    } // fim da classe Mãe Animal
}

class Cachorro extends Animal { //implementando métodos
    public function locomover() { 
        echo "<br> O cachorro é um animal que anda sobre 4 patas..."; 
    }

    public function organismo($animal) { //sobrecarga de método
        parent:: organismo($animal);  // Chamada polimórfica (construtor da classe mãe)
    } 
}

class Cobra extends Animal { 
    public function locomover() { 
        echo "<br> A Cobra é um animal rastejante sem patas "; 
    }

    public function organismo($animal) { 
        parent:: organismo($animal); 
    } // Chamada polimórfica
} 
//pode ter o mesmo nome, mas comportamento diferente
$dog = new Cachorro();
$dog->locomover(); 
$dog->organismo("Cachorro");

$cobra = new Cobra(); 
$cobra->locomover(); 
$dog->organismo("Cobra");