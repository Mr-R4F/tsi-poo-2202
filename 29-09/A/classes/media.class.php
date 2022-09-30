<?php

class Media { 
    public $ados;
    public $avf;
    public $aluno;

    function __construct ($n1, $n2, $al) {
        $this->ados = $n1;
        $this->avf = $n2;
        $this->aluno = $al;
    }   

    function mediaGeo() {
        return sqrt($this->ados * $this->avf); 
    }

    function mostrar() {
        echo $this->aluno . "<br>"; 
    }

    function __destruct() {
        echo "<br>Programa média finalizado!";
    }
}