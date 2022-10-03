<?php

require_once('../classes/media.class.php');
require_once('../classes/mediaAri.class.php');
require_once('../classes/mediaGeo.class.php');

$medAri = new MediaAritmetica($_POST['aluno'], $_POST['num1'], $_POST['num2']);
$medGeo = new MediaGeometrica($_POST['aluno'], $_POST['num1'], $_POST['num2']);

if (isset($_POST['enviar'])) {
   echo 'Media Aritimética: ' . $medAri->mediaAritmetica() . '<br>';
   echo 'Média Geométrica: ' . $medGeo->mediaGeometrica();
}