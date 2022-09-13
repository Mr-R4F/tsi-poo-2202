<?php

class Registro { 
    private $idCli;
    private $login;
    private $email;
    private $tel;
    private $validade;
    private $codAcesso;
    private $tipo;

    private function setUsuario($login, $email, $tel, $tipo) {
        $this->login = $login;
        $this->email = $email;
        $this->tel = $tel;
        $this->tipo = $tipo;
    }

    private function setRegistrar() {

    }

    private function setValidar() {
        
    }

    private function setLogin () {
        
    }
}