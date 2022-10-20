<?php

require_once __DIR__ . '/transation.class.php';
require_once __DIR__ . '/cliente.class.php';
require_once __DIR__ . '/produto.class.php';
require_once __DIR__ . '/conexao.php';

// VERIFICA APENAS SE EXISTE
$valCli = $bd->query("SHOW TABLES LIKE 'Clientes'");
$cli = new Clients($_POST['nome'], $_POST['email'], $_POST['senha']);
$cli->conectarBanco($bd);

if ($valCli -> fetch_assoc() == 0) {
    $cli->criarTabela(
        "CREATE TABLE Clientes (
            IdCliente INT PRIMARY KEY AUTO_INCREMENT, 
            Nome VARCHAR(20), 
            Email VARCHAR(20), 
            Senha VARCHAR(20)
        )"
    );
}

if(isset($_POST['inserir'])) {
    $cli->salvarRegistro("INSERT INTO Clientes (Nome, Email, Senha) VALUES ('{$_POST['nome']}', '{$_POST['email']}', '{$_POST['senha']}')");
}

if(isset($_POST['editar'])) {
    $cli-> excluirRegistro(
        "UPDATE Clientes SET Nome = '{$_POST['nome']}', Email = '{$_POST['email']}', Senha = '{$_POST['senha']}'
        WHERE IdCliente = '{$_POST['id']}'"
    );
}

if(isset($_POST['excluir'])) {
    $cli-> excluirRegistro("DELETE FROM Clientes WHERE IdCliente = {$_POST['id']}");
}