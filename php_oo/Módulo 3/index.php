<?

require_once 'classes/Cliente.class.php';
require_once 'classes/Conta.class.php';

$cliente = new Cliente('João Marcelo');
$conta = new Conta($cliente);

$depositos = [];
foreach($depositos as $valores):
    $conta->depositos($valores);
endforeach;

$saques = [];
foreach($saques as $valores):
    $conta->sacar($valores);
endforeach;

$conta->exibir();

echo "<pre>";
print_r($conta);