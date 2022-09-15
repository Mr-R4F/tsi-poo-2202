<?php

require_once __DIR__ . '/conexao.php';
require_once '../../classes/registro.class.php';

$reg = new Registro();
$reg->dbConn($bd); //recebe o banco

if (isset($_POST['login'])) {
    $reg->setLogin($_POST['email'], $_POST['senha']);
}

if (isset($_POST['recebeCod'])) {
    $reg->setUsuario($_POST['nome'], $_POST['email'], $_POST['telefone']);
    $reg->setRegistrar();
}

if (isset($_POST['validarCod'])) {
    $reg -> setValidar();
}