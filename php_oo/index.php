<?php
    require_once 'classes/Cartap.class.php';
    $cliente1 = new Cartao('Maria Regina', 100000);
    $cliente1->ativarCartao();
    $cliente1->comprar(250);
    $cliente1->comprar(150.56);

    $cliente1->desativarCartao();
    $cliente1->comprar(300);

    $cliente1->ativarCartao();
    $cliente1->comprar(1000);
    $cliente1->comprar(499.44);
    $cliente->comprar(0.1);
?>