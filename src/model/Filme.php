<?php

    /*
        O comando:
        class X {
            public Y1 Z1
            public Y2 Z2
            ...
            public Yn Zn 
        }
        Cria uma classe X com atributos Y publicos do tipo Z 
    */
    class Filme {
        public string $nome;
        public int $ano;
        public string $genero;
        
        //A visibilidade private faz com que a variável só possa ser acessada no arquivo onde foi declarada
        private array $notas= [];

        function receberNota(float $nota): void{

            //Para utilizar um atributo X do objeto, utilize $this->X
            $this->notas[] = $nota;
            echo $this->nome . " recebeu a nota: " . $nota . "\n";
        }
        function calcularMedia() : float{
            $notas = $this->notas;
            $totalNotas = array_sum($notas);
            return $totalNotas/count($notas);
        }
    }