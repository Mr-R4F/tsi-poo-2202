<?php 

require_once('classes/imc.class.php');
$imc = new Imc(); //instânciado a classe imc;

if (isset($_POST['calcula'])) {
    $imc->setImc($_POST['peso'], $_POST['altura']);
}

if (isset($_POST['limpa'])) {
    $imc->setImc('', '');
}

