<?php

require_once('jogador.php');
Class Time{

private $nome;
private $anoFundacao;
private $jogadores = [];

public function getNome(){
    return $this->nome;
}

public function setNome($nome){
    $this->nome = $nome;
}

public function getAnoFundacao(){
    return $this->anoFundacao;
}

public function setAnoFundacao($anoFundacao){
    $this->anoFundacao = $anoFundacao;
}

public function adicionaJogador($nome, $posicao, $dataNascimento){
    $oJogador = new Jogador($nome, $posicao, $dataNascimento);

    array_push($this->jogadores, $oJogador);

}

public function listaJogares(){
    foreach($this->jogadores as $oJogador){
        echo $oJogador->getNome(). " -- ". $oJogador->getPosicao(). "<br>";
    }
}

public function getJogadores(){
    return $this->jogadores;
}


}