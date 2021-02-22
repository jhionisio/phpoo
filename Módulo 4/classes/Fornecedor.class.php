<?

require_once 'Principal.class.php';
class Fornecedor extends Principal{
    private $produtos, $representante;

    public function setProdutos($pr){
        $this->produtos = $pr;
    }
    public function setRepresentante($re){
        $this->representante = $re;
    }
    public function getProdutos(){
        return $this->produtos;
    }
    public function getRepresentante(){
        return $this->representante;
    }

}