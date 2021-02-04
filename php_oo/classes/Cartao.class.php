<?php
    class Cartao{

        private $status, $titular, $saldo, $msg;

        public function __construct($t, $s){
            $this->setStatus('Cartão Desativado');
            $this->setTitular($t);
            $this->setSaldo($s);
        }
        public function setStatus($s){
            $this->status = $s;
        }
        public function setTitular($t){
            $this->titular = $t;
        }
        public function setSaldo($sa){
            $this->saldo = $sa;
        }
        public function setMsg($m){
            $this->msg = $m;
        }
        public function getStatus(){
            return $this->status;
        }
        public function getTitular(){
            return $this->titular;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function getMsg(){
            return $this->msg;
        }
        public function comprar($v){

            if($this->getStatus() == 'Cartão ativado'):
                if($this->getSaldo() >= $v):
                    $this->setSaldo($this->getSaldo() - $v);
                    $this->setMsg('Compra no valor de R$'.number_format($v, "2",",",".").'efetuada com sucesso!');
                else:
                    $this->setMsg('Saldo insuficiente!');
                endif;
                $this->setMsg('Cartão desativado!');
            endif;

        }
        public function ativarCartao(){
            $this->setStatus('Cartão ativado!');
        }
        public function desativarCartao(){
            $this->setStatus('Cartão desativado!');
        }

        

    }
?>