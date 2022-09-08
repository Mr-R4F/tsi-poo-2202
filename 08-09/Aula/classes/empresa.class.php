<?php

require_once("pessoa.class.php");

class Empresa extends Pessoa { //subclasse
    public $razaosocial;
    public $cnpj;
    public $inscricaoestadual;

    function setEmpresa($rs, $cnpj, $ie): void { //void sem retorno
        $this->razaosocial = $rs;
        $this->cnpj = $cnpj;
        $this->inscricaoestadual = $ie;
    }   
}
//mysqli serve para conexão em banco de dados (objeto de acesso ao banco de dados)
//parametros localhost, root, senha, nome do banco(deixa sem se não criou protocolo)
//criar banco de dados e ao se conectar criar banco protocolo
