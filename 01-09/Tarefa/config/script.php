<?php

require_once '../config/conexao.php';
require_once '../classes/registro.class.php';

$reg = new Registro();
$reg->dbConn($bd); //recebe o banco

if (isset($_POST['login'])) {
    $reg->setLogin($_POST['login'], $_POST['senha']);
}

if (isset($_POST['recebeCod'])) {
    $reg->setUsuario($_POST['login'], $_POST['email'], $_POST['telefone'], 1);
    $reg->setRegistrar();
}

if (isset($_POST['validarCod'])) {
    $val = true;
    $reg -> setValidar($val);
}