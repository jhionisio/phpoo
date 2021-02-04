<?php

require_once 'classes/Cliente.class.php';

$Cliente1 = new Cliente();

$Cliente1->validar('Pedro Paulo Abreu','Email@gmail.com');
$Cliente1->exibir();

$Cliente2->validar('Regina Maria','Reginabreu@gmail.com');
$Cliente2->exibir();

?>