<?php 

    require __DIR__ . "/model/Conta.php";
    require __DIR__ . "/model/Tipo.php";

    $conta1 = new Conta("Matheus Arantes Ferreira", Tipo::Poupanca);
    $conta1->sacar(200.5);
    $conta1->depositar(1000.5);
    $conta1->sacar(900);

    $conta1 = new Conta("Mikael Luiz", Tipo::Corrente);
    $conta1->depositar(100000);
    $conta1->sacar(10000.5);
    $conta1->sacar(90000);
