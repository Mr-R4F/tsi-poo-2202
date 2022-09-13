<?php

class Registro { 
    public $idCli;
    public $login;
    public $email;
    public $tel;
    public $validado;
    public $codAcesso;
    public $tipo;

    public function setUsuario($login, $email, $tel, $tipo) {
        $this->login = $login;
        $this->email = $email;
        $this->tel = $tel;
        $this->tipo = $tipo;
    }

    public function setRegistrar() { //enviar o código para o banco e manda o cód para o email
       
    }

    public function setValidar($val) {
        $this->validado = $val;
    }

    public function setLogin ($login, $codAcesso) {
        
    }
}
