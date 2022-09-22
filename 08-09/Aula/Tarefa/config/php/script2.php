<?php

require_once __DIR__ . '/conexao.php';
require_once '../../classes/cliente.class.php';

$cli = new Clientes();
$cli->dbConn($bd); //recebe o banco

// Usuario
if (isset($_POST['enviar'])) {
    $cli->setCliente($_POST['nome'], $_POST['celular'], $_POST['sexo'], $_POST['rg'], $_POST['cpf'], $_POST['email']);
    $cli->setRegistrar();
}