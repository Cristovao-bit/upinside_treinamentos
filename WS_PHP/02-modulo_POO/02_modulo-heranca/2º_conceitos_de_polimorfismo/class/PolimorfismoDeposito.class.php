<?php

class PolimorfismoDeposito extends Polimorfismo{
        
    public $Desconto;
    
    function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->Metodo = 'Depósito';
    }
    
    public function setDesconto($Desconto) {
        $this->Desconto = $Desconto;
    }

    public function Pagar() {
        $this->Valor = ($this->Valor / 100) * 100 - $this->Desconto;
        parent::Pagar();
    }
    
}
