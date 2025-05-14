<?php 

    require __DIR__ . "/model/Filme.php";
    require __DIR__ . "/model/Genero.php";

    //Para atribuir valor a um enum, use X::Y para atribuir Y ao enum X
    $filme1 = new Filme("Star Wars: Ameaça Fantasma", 1999, Genero::Ficcao, 6.5);
    $filme1->receberNota(4.5);
    $filme1->receberNota(9.5);
    $filme1->receberNota(7.2);
    $filme1->receberNota(6.8);
    echo $filme1->nome . " recebeu a avaliação média " . $filme1->calcularMedia() . " de 10.\n"; 

    $filme2 = new Filme("Star Wars: Ataque dos Clones", 2002, Genero::Ficcao, 6.6);
    $filme2->receberNota(5.0);
    $filme2->receberNota(10.0);
    $filme2->receberNota(8.3);
    $filme2->receberNota(6.7);
    echo $filme2->nome . " recebeu a avaliação média " . $filme2->calcularMedia() . " de 10.\n"; 

    $filme3 = new Filme("Star Wars: A Vingança dos Sith", 2005, Genero::Ficcao, 7.6);
    $filme3->receberNota(10);
    $filme3->receberNota(10);
    $filme3->receberNota(10);
    $filme3->receberNota(10);
    echo $filme3->nome . " recebeu a avaliação média " . $filme3->calcularMedia() . " de 10.\n"; 
