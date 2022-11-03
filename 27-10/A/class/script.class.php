<?php
class Retangulo {
protected $m_largura;
protected $m_altura;
public function setLargura ( $largura )
{ $this->m_largura = $largura;}
public function setAltura ($altura )
{ $this->m_altura = $altura; }
public function getArea() {
return ($this->m_largura * $this->m_altura); }
}
class Quadrado extends Retangulo {
public function setLargura($largura) {
$this->m_largura = $largura;
$this->m_altura = $largura;
}
public function setAltura ($altura) {
$this->m_largura = $altura;
$this->m_altura = $altura;
} }
$q1 = new Quadrado;
$q1->setAltura(10);
$q1->setLargura(5); echo $q1->getArea(); 
