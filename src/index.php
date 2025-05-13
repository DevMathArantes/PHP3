<?php 

    require __DIR__ . "/functions.php";
    require __DIR__ . "/model/Filme.php";

    $filme1 = novoFilme("Star Wars: Ameaça Fantasma", 1999, "Ação", 6.5);
    $filme1->receberNota(4.5);
    $filme1->receberNota(9.5);
    $filme1->receberNota(7.2);
    $filme1->receberNota(6.8);
    echo "\n" . $filme1->nome . " possui uma avaliação média de " . $filme1->calcularMedia() . "\n";

    $filme2 = novoFilme("Star Wars: Ataque dos Clones", 2002, "Ação", 6.6);
    $filme3 = novoFilme("Star Wars: A Vingança dos Sith", 2005, "Ação", 7.6);


