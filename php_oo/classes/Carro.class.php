<?php

class Carro{

    private $ligado, $Vatual, $Vmax, $msg;

    public function __construct($vm){

        $this->setLigado('Carro desligado!');
        $this->setVatual(0);
        $this->setVmax($vm);

    }
    //métodos setters
    public function setLigado($l){
        $this->ligado = $l;
    }
    public function setVatual($va){
        $this->Vatual = $va;
    }
    public function setVmax($vm){
        $this->Vmax = $vm;
    }
    public function setMsg($msg){
        $this->msg = $msg;
    }
    //métodos getters
    public function getLigado(){
        return $this->ligado;
    }
    public function getVatual(){
        return $this->Vatual;
    }
    public function getVmax(){
        return $this->Vmax;
    }
    public function getMsg(){
        return $this->msg;
    }
    //métodos específicos
    public function acelerar($vel){

        if($this->getLigado() == 'Carro ligado!'):

            if($this->getVatual() + $vel < $this->getVmax()):
                $this->setVatual($this->getVatual + $vel);
                $this->setMsg('Acelerando...');
            else:
                $this->setVatual($this->getVmax());
                $this->setMsg('Velocidade máxima atingida!');
            endif;
        
        else:
            $this->setMsg('O carro está desligado');
        endif;
    }
    public function ligar(){
        $this->setLigado('Carro ligado!');
    }
    public function desligar(){
        $this->setLigado('Carro desligado!');
    }
    public function detalhes(){
        echo "Status: {$this->getLigado()}<br>";
        echo "Vel. Máx: {$this->getVmax()}<br>";
        echo "Vel. Atual: {$this->getVatual()}<br>";
        echo "Msg: {$this->getMsg()}<br><br>";
    }

}