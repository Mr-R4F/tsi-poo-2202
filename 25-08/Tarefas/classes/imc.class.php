<?php

class Imc {
    public $peso;
    public $altura;
    public $valImc;

    function setImc($peso, $altura) {
        if ($peso == '' && $altura == '' || $peso == '' || $altura == '' || $peso == 0  && $altura == 0 || $peso == 0 || $altura == 0) {
            $this->peso = $this->altura = 0;
        } else {
            $this->peso = $peso;
            if (strpos($altura, '.') == true)
                $this->altura = $altura;
            else  
                $this->altura = $altura / 100; //converte de CM para M.
        }
    }

    function getImc() {
        if ($this->peso == '' && $this->altura == '' || $this->peso == '' || $this->altura == '' || $this->peso == 0  && $this->altura == 0 || $this->peso == 0 || $this->altura == 0) {
            return $this->peso = $this->altura = 0;
        } else {
            $this->valImc = number_format($this->peso / ($this->altura ** 2), 2, '.', ' ');
            return $this->valImc;
        }
    }

    function setStatus($valImc) {
        if ($valImc != 0) {
            switch ($valImc >= 0) {
                case $valImc >= 40.00:
                    return 'OBESIDADE GRAVE';
                    break;
            
                case $valImc <= 39.99 && $valImc >= 30.00:
                    return 'OBESIDADE';
                    break;
                    
                case $valImc <= 29.99 && $valImc >= 25.00:
                    return 'SOBREPESO';
                    break;
            
                case $valImc <= 24.99 && $valImc >= 18.50:
                    return 'NORMAL';
                    break;
                    
                case $valImc < 18.50:
                    return 'MAGREZA';
                    break;
            
                default:
                    break;
            }
        }
    }

    function getStatus() {
        return $this->setStatus($this->getImc());
    }
}