<?php

abstract class Abstracao {

    public $Cliente;
    public $Conta;
    public $Saldo;

    function __construct($Cliente, $Saldo) {
        $this->Cliente = $Cliente;
        $this->Saldo = $Saldo;
    }

    public function Depositar($Valor) {
        $this->Saldo += (float) $Valor;
        echo "<span style='color:green'><b>{$this->Conta}:</b> Depósito de {$this->Real($Valor)} efetuado com sucesso!</span><br>";
    }

    public function Sacar($Valor) {
        $this->Saldo -= (float) $Valor;
        echo "<span style='color:red'><b>{$this->Conta}:</b> Saque de {$this->Real($Valor)} efetuado com sucesso!</span><br>";
    }

    /** @param Abstração $Destino */
    public function Tranferir($Valor, $Destino) {
        if ($this === $Destino):
            echo "Você não pode transferir valores para mesma conta!";
        else:
            echo "<hr>";
            $this->Sacar($Valor);
            $Destino->Depositar($Valor);
            echo "<span style='color:blue'><b>{$this->Conta}:</b> Transferência de {$this->Real($Valor)} efetuada com sucesso, de {$this->Cliente} para {$Destino->Cliente}!</span>";
            echo "<hr>";
        endif;
    }

    public function Extrato() {
        echo "<hr><hr>Olá {$this->Cliente}. Seu saldo em {$this->Conta} é de {$this->Real($this->Saldo)}<hr>";
    }

    public function Real($Valor) {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }

    abstract public function VerSaldo();
}
