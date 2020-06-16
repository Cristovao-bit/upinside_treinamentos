<?php

class AbstracaoCC extends Abstracao{
    
    public $Limite;
    
    function __construct($Cliente, $Saldo, $Limite) {
        parent::__construct($Cliente, $Saldo);
        $this->Conta = 'Conta Corrente';
        $this->Limite = (float) $Limite;
    }
    
    final public function Sacar($Valor) {
        if($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Sacar($Valor);
        else:
            echo "<span style='color:red'><b>{$this->Conta}:</b> Erro ao sacar {$this->Real($Valor)}, saldo indisponível</span><br>";
        endif;
    }
    
    /** @param Abstração $Destino */
    final public function Tranferir($Valor, $Destino) {
        if($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Tranferir($Valor, $Destino);
        else:
            echo "<span style='color:red'><b>{$this->conta}:</b> Erro ao transferir {$this->Real($Valor)}, saldo indisponível!</span><br>";
        endif;
    }

    public function VerSaldo() {
        parent::Extrato();
    }

}
