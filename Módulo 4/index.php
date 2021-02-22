<?

require_once 'classes/autoload.php';

$func1 = new Funcionario();
$cli1 = new Cliente();
$for1 = new Fornecedor();

echo "<hr>";
print_r($func1);

echo "<hr>";
print_r($cli1);

echo "<hr>";
print_r($for1);

echo "<hr>";

$n = 'fabio souza';
$t = '(11) 96766-8240';
$c = 'vendedor';
$s = 4800;

$func1->validar($n,$t,$c,$s);
$func1->exibir();