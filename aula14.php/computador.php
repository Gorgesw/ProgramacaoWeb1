<?php

class computador {

    private $status;

    public function ligar(){
        $this->status = 'Ligado';
    }

    public function desligar(){
        $this->status = 'Desligado';
    }

    public function getStatus(){
        return $this->status;
    }

    

}