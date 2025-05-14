<?php

    /*
        O comando:
        class X {
            N1 Y1 Z1
            N2 Y2 Z2
            ...
            Nn Yn Zn 
        }
        Cria uma classe X com atributos Z publicos do tipo Y e acesso N 
    */
    class Filme {

        /*
            A visibilidade public faz com que a variável seja acessivel em outros arquivos
            
            A visibilidade private faz com que a variável só possa ser acessada no arquivo onde foi declarada
        */

        private array $notas;

        /*
            Método construtor:
            public function __construct(private $N1, private $N2..., private $Nn){
            }

            Para uma classe Y com esse método construtor, os setters poderiam ser substituidos durante a própria 
            criação do objeto com $O = new Y(Z1, Z2..., Zn); atribuindo os valores Z aos atributos N

            A única função que pode criar atributos através dos parâmetros é o método __construct()
        */
        public function __construct(

            /*
                A propriedade readonly faz com que a variável só possa ser atribuída uma única (o valor dela não poderá 
                ser mudado em hipótese alguma) vez e isso deve ocorrer especificamente na classe onde ela foi criada 
                (nem mesmo em classes filhas)
            */
            public readonly string $nome, 
            public readonly int $ano, 
            public readonly Genero $genero){

            //O comando $this->X referência o atributo X do objeto
            $this->notas = [];
        }

        public function receberNota(float $nota): void{

            //Para utilizar um atributo X do objeto, utilize $this->X
            $this->notas[] = $nota;
        }

        public function calcularMedia() : float{
            $notas = $this->notas;
            $totalNotas = array_sum($notas);
            return  array_sum($notas)/count($notas);
        }

    }