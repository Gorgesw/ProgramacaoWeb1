<?php

require_once('time.php');

// $oJogador = new Jogador();
// $oJogador->setNome('Clever');
// $oJogador->setPosicao('Batedor');
// $oJogador->setDataNascimento('17/11/2005');

$oTime = new Time();
$oTime->setNome('Boiolas FC');
$oTime->setAnoFundacao('17/11/2005');
$oTime->adicionaJogador("Samuel", 'MEia', '17/11/2005');
$oTime->adicionaJogador("Clever", 'Batedor', '12/05/1995');
$oTime->listaJogares();