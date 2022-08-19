<?php 
//n retorna nd processo /void
//Criando váriaveis númericas no PHP
//gettype - mostra o tipo da var

$numInteiro = 1234;
echo "\n" . gettype($numInteiro); //mostra só o tipo //Num inteiro

$numNegativo = -333;
echo "\n" . gettype($numNegativo); //Num negativo

$numReal = 123.44;
echo "\n" . gettype($numReal); //Num real

$numoctal = 0123;
echo "\n" . gettype($numoctal); //Octal número 83 em decimal

$numHexa = 0x1A;
echo "\n" . gettype($numHexa); //Hexadecimal número 26 em decimal

$notCien = 4e23;
echo "\n" . gettype($notCien); //Notação cientica

$nome = "Eliseu Lemse";
echo "\n" . gettype($nome); //string

//Criando constantes no PHP

define('pi', 3.14); //através da função 'define' é possível criarmnos constantes no PHP
$raio = 10;
$area = pow($raio, 2) * pi;
echo $area;

/*

<?php // EXEMPLO 2
$a = -10; $b = 11; $c = 4;
$valdelta = getDelta ( $a, $b, $c );
$analise = analiseDelta ( $valdelta );
echo "\nA:" . $a, "\nA:" . $b, "\nCA:" . $c, "\nDelta:" . $valdelta, "\nAnálise:" . $analise . "<br>";
if ( $valdelta >= 0 ) { $x1 = getX1 ( $a, $b, $valdelta );
$x2 = getX2 ( $a,$b,$valdelta );
echo "\nValor de X1: {$x1}", "\nValor de X2: {$x2}" . "<br>"; }
function getDelta ( $a,$b,$c ) { $del = pow ( $b, 2 ) - 4 * $a * $c;
return $del;}
function getX1 ( $a, $b, $valordelta ) { $x1 = (-$b + sqrt ($valordelta ) ) / (2 * $a);
return $x1;}
function getX2 ( $a, $b, $valordelta ) { $x2 = (-$b - sqrt ($valordelta ) ) / (2 * $a);
return $x2;}
function analiseDelta ( $delta ) {
if ( $delta == 0 ) return "Duas raizes reais iguais!";
else if ( $delta > 0 ) return "Duas raizes reais diferentes!";
else return "Sem solução!"; }
*/