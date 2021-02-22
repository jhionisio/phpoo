<?

require_once 'Principal.class.php';

class Cliente extends Principal{

    private $site;

    public function setSite($si){
        $this->salario = $si;
    }
    public function getSite(){
        return $this->salario;
    }
}