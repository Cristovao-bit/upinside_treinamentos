<?php

class AbstracaoCP extends AbstracaoCC{
    
    public $Rendimento;
    
    function __construct($Cliente, $Saldo) {
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = 1.7;
    }
    
    final public function Depositar($Valor) {
        $Juros = $Valor * ($this->Rendimento / 100);
        $Deposito = $Valor + $Juros;
        parent::Depositar($Deposito);
        echo "<small style='color:#09f'>Valor do depósito: {$this->Real($Valor)} || Rendimento: {$this->Real($Juros)}</small><hr>";
    }
    
}
