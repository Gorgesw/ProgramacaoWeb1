<?php 

class calculadora {

    private $numero1;

    private $numero2;

    public function calculaSubtracao($numero1, $numero2){
        return $numero1 - $numero2;
    }

    public function calculaAdica($numero1, $numero2){
        return $numero1 + $numero2;

    }

    public function calculaDivisao($numero1, $numero2){
        return $numero1 / $numero2;

    }

    public function calculaMultiplicacao($numero1, $numero2){
        return $numero1 * $numero2;

    }

    public function getNumero1(){
        return $this->numero1;
    }

    public function getNumero2(){
        return $this->numero2;
    }
}