<?php

require_once("classes/media.class.php"); //arv. classe mãe

class MediaGeo extends Media { //classe filha que hera atributos e funções da classe média
    function __construct ($n1, $n2, $aluno) { //contrutor classe filha (é possivel colocar um construtor diferente)
        parent::__construct ($n1, $n2, $aluno); 
        /*
            os atributos estão na classe mãe chamar o contrutor da classe mãe 
            (faz a ligação da classe mãe com a classe filha) (as infos nesse caso 
            serão enviada p/ a classe mãe, vai direto para os parâmetros da classe mãe, 
            ligação com métodos da classe mãe)
        */
    }

    function mostrar() {
        parent::mostrar(); // método void exemplo de polimorfismo
        echo parent::mediaGeo(); // método não void
    }

    function __destruct () {
        parent::__destruct();
        echo "<br>Programa MediaGeo Finalizado com Sucesso!"; 
    }
}

$m1 = new MediaGeo(3.3,7.4,"Eliseu"); //se for com parametros DEVE usar, caso n , há a possibilidade de usar um construtor sem parametros(CRIAR)
echo $m1->mostrar(); 
unset($m1);