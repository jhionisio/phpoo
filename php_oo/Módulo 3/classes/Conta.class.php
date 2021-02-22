<?

require_once 'Operacoes.php';
class Conta implements Operacoes{

    private $titular, $saldo, $msg;

    public function __construct($t){
        $this->setTitular($t);
    }
    private function setTitular($t){
        $this->titular = $t;
    }
    private function setSaldo($s){
        $this->saldo = $s;
    }
    private function setMsg($msg){
        $this->msg = $msg;
    }
    private function getTitular(){
        return $this->titular;
    }
    private function getSaldo(){
        return $this->saldo;
    }
    private function getMsg(){
        return $this->msg;
    }
    public function depositar($v){
        $this->setSaldo($this->getSaldo() + $v);
    }
    public function sacar($v){
        if($this->getSaldo() >= $v);
            $this->setSaldo($this->getSaldo() - $v);
    
        $this->setMsg('Saldo insuficiente!');
    
    }
    public function exibir(){

    }

}