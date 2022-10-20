<?php

class Product implements Itransation {
    public $nome;
    public $qtd;
    public $con;

    public function __construct($nome, $qtd) {
        $this->nome = $nome;
        $this->qtd = $qtd;
    }

    public function conectarBanco($con) {
        $this->con = $con;
    }

    public function criarTabela($sql) {
        $stmt = $this->con -> prepare("$sql");
        $stmt -> execute();
        echo 'TABELA CRIADA C/ SUCESSO';
    }

    public function salvarRegistro($sql) {
        echo $sql;
    }

    public function excluirRegistro($sql) {
        echo $sql;
    }

    public function exibirRegistroGridHtml($sql) {
        echo $sql;
    }
}