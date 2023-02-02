<?php

    require_once("Cliente.php");
    require_once("Endereco.php");
    require_once("Estoque.php");
    require_once("Funcionario.php");
    require_once("Pessoa.php");
    require_once("Mercado.php");


    $estoq = new Estoque("Maçã", 10, 3.99);
    $endFilipe = new Endereco("Estrada Sample", 7, "São Sample", "SP","07777-777");
    $funFilipe = new Funcionario("777.777.777-70", "Filipe", "(11) 9 7777-7777", "M", $endFilipe, 00001, "ADM", 1500.00);
    $cliFilipe = new Cliente("777.777.777-70", "Filipe", "(11) 9 7777-7777", "M", $endFilipe, 1, 1000);
    $compraSample = new Mercado($cliFilipe, $estoq);
    
    echo $estoq;

    echo $funFilipe;
    echo $cliFilipe;
    echo $compraSample->comprar(5);
    echo $estoq;


?>