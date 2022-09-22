<?php

require_once __DIR__ . '/pessoa.class.php'; //subclasse - ref onde está a classe mão

class Funcionario extends Pessoa { //classe filho (classe deve ter caracter maiuscula no primerio caracter, insto é esta classe é uma extensão de classe pessoa, faz ligação, estão interligadas)
    public $nome;
    public $cpf;
    public $rg;

    public function setFuncionario($nome, $cpf, $rg):void {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
    }
}