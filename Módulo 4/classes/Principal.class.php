<?
class Principal{

    private $nome, $telefone, $email;

    public function setNome($n){
        $this->nome = $n;
    }
    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function setEmail($e){
        $this->email = $e;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function getEmail(){
        return $this->email;
    }

}