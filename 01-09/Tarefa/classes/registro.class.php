<?php

require_once '../config/phpMailer.php';

class Registro { 
    private $idCli;
    private $login;
    private $email;
    private $tel;
    private $validado;
    private $codAcesso;
    private $tipo;
    private $bd; //banco

    //Conexão do banco
    public function dbConn($val) {
        $this->bd = $val;
    }

    public function setUsuario($login, $email, $tel) {
        $this->login = $login;
        $this->email = $email;
        $this->tel = $tel;
    }

    public function setRegistrar() { //enviar o código para o banco e manda o cód para o email
       
    }

    public function setValidar($val) {
        $this->validado = $val;
    }

    public function setLogin ($login, $codAcesso) {
        $stmt = $this->bd->query("SELECT email AND codAcesso FROM usuarios WHERE email = '$login' AND codAcesso = '$codAcesso'");
        $stmt -> execute();
        $user = $stmt -> fetchAll();
        var_dump($user);
        echo $user === '' ? 'LOGADO COM SUCESSO' : 'USUARIO NÃO EXISTE NA BASE DE DADOS';
    }
}