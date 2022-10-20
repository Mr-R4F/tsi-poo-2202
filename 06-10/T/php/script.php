<?php

require_once __DIR__ . '/transation.class.php';
require_once __DIR__ . '/cliente.class.php';
require_once __DIR__ . '/produto.class.php';
require_once __DIR__ . '/conexao.php';

$valCli = $bd->query("SHOW TABLES LIKE 'Clientes'");
$valProd = $bd->query("SHOW TABLES LIKE 'Produtos'");

$cli = new Clients('teste', 'teste@teste.com','12345678');
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

$prod = new Product('Bola', '32');
$prod -> conectarBanco($bd);

if ($valProd -> fetch_assoc() == 0) {
    $prod -> criarTabela(
        "CREATE TABLE Produtos (
            IdProduto INT PRIMARY KEY AUTO_INCREMENT,
            Nome VARCHAR(50),
            Qtd VARCHAR(50),
            IdCliente INT,
            FOREIGN KEY (IdCliente) REFERENCES Clientes(IdCliente)
        )"
    );
}
