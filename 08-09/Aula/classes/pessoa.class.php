<?php

class Pessoa {  //super classe
    public $email;
    public $telefone;
    public $cep;
    public $logradouro;
    public $número;

    function setPessoa($email, $tel, $cep, $log, $num): void { //vazio
        $this->email = $email;
        $this->telefone = $tel;
        $this->cep = $cep;
        $this->logradouro = $log;
        $this->numero = $num; 
    }

    function exibirPessoa($html): void {
        echo $html;
    }   
}