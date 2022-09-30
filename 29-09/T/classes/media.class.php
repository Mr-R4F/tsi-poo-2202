<?php

abstract class Media {
    protected $nota1;
    protected $nota2;
    protected $aluno;

    function __construct($aluno, $nota1, $nota2) {
       $this->nota1 = $nota1;
       $this->nota2 = $nota2;
       $this->aluno = $aluno;
    }

    abstract public function mediaAritmetica();
    abstract public function mediaGeometrica();
    
    function mostrar():void {
       echo $medA . $medG;
    } 
}