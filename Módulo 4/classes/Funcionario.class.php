<?

require_once 'Principal.class.php';

class Funcionario extends Principal{
    private $cargo, $salario;

    public function setCargo($c){
        $this->cargo = $c;
    }
    public function setSalario($s){
        $this->salario = $s;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function validar($n, $t, $e, $c, $s){
        $this->setNome($n);
        $this->setTelefone($t);
        $this->setEmail($e);
        $this->setSalario($s);
        $this->setCargo($c);

    }
    public function exibit(){
        echo "Funcionário: {$this->getNome()}<br>";
        echo "Telefone: {$this->getTelefone()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Cargo: {$this->getCargo()}<br>";
        echo "Salário: {$this->getSalario()}<br><br>";
    }
}