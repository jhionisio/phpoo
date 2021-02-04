<?php
    require_once 'classes/Carro.class.php';

    $carro1 = new Carro(250);
    $carro1->ligar();
    $carro1->acelerar(30);
    $carro1->acelerar(90);
    $carro1->acelerar(140);

    echo "<pre>";
    Print_r($carro1);

    echo "<hr>";
    $carro1->detalhes();

?>