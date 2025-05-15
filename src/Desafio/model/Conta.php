<?php
    class Conta{

        private float $saldo;
        public function __construct(public readonly string $titular, public readonly Tipo $tipo){
            $this->saldo = 0;
        }

        public function informar(string $acao){
            echo 
            "\n\n----------NOVO "
            . $acao
            . "----------\nTipo de conta: " 
            . $this->tipo->value
            ."(taxa: "
            .$this->tipo->taxa()
            .")"
            . "\nTitular: "
            . $this->titular
            . "\nSaldo atual: R$" 
            . $this->saldo
            . "\n----------FIM----------\n\n";
        }

        //Métodos para manipular saldo
        public function sacar(float $saque){
            if($saque <= $this->saldo){
                $this->saldo -= $saque;
                $this->informar("SAQUE");
            } else{
                echo "\n...Valor em conta insuficiente para saque...\n";
            }
        }
        public function depositar(float $deposito){
            $this->saldo += $deposito;
            $this->informar("DEPÓSITO");
        }
    }