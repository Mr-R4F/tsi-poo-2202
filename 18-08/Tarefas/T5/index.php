<?php 
/*
Usando os terminais linux on-line : repl.it ou openGDB simplesmente monte e teste as
funções para fazer os cálculos abaixo, não esqueça de comentar quais são os parâmetros,
é as variáveis de retorno das funções. Não necessita formulário html, é somente testes
direto no terminal.

a) Calcular Area = base * altura / 2
Mostrar Área, base e Altura.
b) Calcular média geometria mediageo = Raiz quarta ( a * b, * c, * d )
exibir mediageo, a, b, c, d.

*/

/*
TAREFA REALIZADA PELO TERMINAL **
*/

/*
A diferença é que as funções retornam valores os procedimentos não
*/

//A
$b = readline('digite a base:'); //base
$h = readline('digite a altura:'); //altura
$a = calcular($b, $h); //área

function calcular($b, $h) {
    return ($b * $h) / 2;
}

mostrar($a, $b, $h);
function mostrar($a, $b, $h) {
    echo 'Área: ' . $a . ' ';
    echo 'Base: ' . $b . ' ';
    echo 'Altura: ' . $h . ' ';
}

//B
$a = readline('digite o 1º nº:'); 
$b = readline('digite a 2º nº:');
$c = readline('digite a 3º nº:');
$d = readline('digite a 4º nº:');
$mediaGeo = calcularMedia($a, $b, $c, $d);

function calcularMedia($a, $b, $c, $d) {
    return pow($a * $b * $c * $d, (0.25)); //0.25 equivalente a raiz quarta;
}

exibir($mediaGeo, $a, $b, $c, $d);
function exibir($mediaGeo, $a, $b, $c, $d) {
    echo 'média: ' . $mediaGeo . ' ';
    echo 'val: ' . $a . ' ';
    echo 'val: ' . $b . ' ';
    echo 'val: ' . $c . ' ';
    echo 'val: ' . $d . ' ';
}