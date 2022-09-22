<?php

require_once __DIR__ . '/pessoa.class.php';

class Clientes extends Pessoa {
    public $nome;
    public $celular;
    public $sexo;
    public $rg;
    public $cpf;
    public $email;
    public $bd;

    public function dbConn($bd) {
        $this->bd = $bd;
    }

    public function setCliente($nm, $cel, $sexo, $rg, $cpf, $em) {
        $this->nome = $nm;
        $this->celular = $cel;
        $this->sexo = $sexo;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->email = $em;
    }

    public function setRegistrar() {
        $stmt = $this->bd -> prepare(
            "INSERT INTO clientes (nome, celular, sexo, rg, cpf, email) 
            VALUES (?, '{$this->celular}', ?, '{$this->rg}', '{$this->cpf}', ?)"
        );
        $stmt->bind_param('sss', $this->nome, $this->sexo, $this->email);
        echo $stmt->execute() ? 'Cliente Cadastrado com sucesso' : 'Ocorreu um erro ao Inserir';
    }
}