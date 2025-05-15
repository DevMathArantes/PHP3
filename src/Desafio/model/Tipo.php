<?php 

    enum Tipo : string{
        case Corrente = "Corrente";
        case Investimento = "Investimento";
        case Univesitario = "Universitária";
        case Poupanca = "Poupança";

        public function taxa(): string{
            return match($this){
                Tipo::Corrente, Tipo::Investimento => "sim",
                Tipo::Poupanca, Tipo::Universitario=> "não"
            };
        }
    }

   