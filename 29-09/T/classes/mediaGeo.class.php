<?php

require_once('../classes/media.class.php');

class MediaGeometrica extends Media {
    protected $nota1;
    protected $nota2;
    protected $aluno;

    function __construct ($aluno, $nota1, $nota2) { 
        parent::__construct ($aluno, $nota1, $nota2); 
    }

    function mediaGeometrica() {
        return pow($this->nota1 * $this->nota2, (0.5));
    }

    function mediaAritmetica() {
        return ($this->nota1 + $this->nota2 / 2);
    }
}