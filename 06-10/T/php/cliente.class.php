<?php 

class Clients implements Itransation {
    public $nome;
    public $email;
    public $senha;
    public $con;

    public function __construct($nome, $email, $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function conectarBanco($con) {
        $this->con = $con;
    }

    public function criarTabela($sql) {
        $stmt = $this->con -> prepare("$sql");
        $stmt -> execute();
        echo 'TABELA CRIADA C/ SUCESSO' . '<br>';
    }

    public function salvarRegistro($sql) {
        $stmt = $this->con -> prepare("$sql");
        $stmt ->bind_param('sss', '', '', '');
        if ($stmt -> execute()) echo 'Sucesso';
    }

    public function excluirRegistro($sql) {
        echo $sql;
    }

    public function exibirRegistroGridHtml($sql) {
        echo $sql;
    }
}