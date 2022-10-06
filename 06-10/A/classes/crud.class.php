<?php

interface ICrud {
    public function criar($sql);
    public function salvar($sql);
    public function excluir($sql);
    public function mostrar($chave); 
}

class Cliente implements ICrud {
    public $chave;
    public $nome;
    
    public function _construct ($chave, $nome) { 
        $this->$chave = $chave; 
        $this->$nome = $nome; 
    }

    public function criar($sql) { 
        echo $sql; 
    }

    public function salvar($sql) { 
        echo $sql; 
    }

    public function excluir($sql) { 
        echo $sql; 
    }

    public function mostrar($chave) { 
        echo $sql; 
    } 
}
$obj = new Cliente("1","Eliseu");
$obj->criar("create table clientes (int chave, varchar nome(2))");