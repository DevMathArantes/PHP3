<?php 

    function novoFilme(string $nome, int $ano, string $genero) : Filme{

        /*
            O comando:
            $X = new Y();
            
            Cria um objeto X da classe Y

            Para preencher seus atributos faça:
            $X -> Y1 = Z1
            $X -> Y2 = Z2
            ...
            A variável X terá o atributo Y preenchido por Z 
        */
        $filme = new Filme();

        $filme->nome = $nome;
        $filme->ano = $ano;
        $filme->genero = $genero;

        return $filme;
    }