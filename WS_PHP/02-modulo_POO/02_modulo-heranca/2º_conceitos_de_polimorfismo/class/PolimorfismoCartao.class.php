<?php

class PolimorfismoCartao extends Polimorfismo{
    
    public $Juros;
    public $Encargos;
    public $Parcela;
    public $NumParcelas;
    
    function __construct($Produto, $Valor) {
        parent::__construct($Produto, $Valor);
        $this->Juros = 1.17;
        $this->Metodo = 'Cartão de Credito';
    }
    
    public function Pagar($Parcelas = null) {
        $this->setNumParcelas($Parcelas);
        $this->setEncargos();
        
        $this->Valor = $this->Valor + $this->Encargos;
        $this->Parcela = $this->Valor / $this->NumParcelas;
        
        echo "Você pagou {$this->Real($this->Valor)} por um {$this->Produto}<br>";
        echo "<small>Pagamento efetuado via {$this->Metodo} em {$this->NumParcelas}x iguais de {$this->Real($this->Parcela)}</small><hr>";
    }
    
    /** para 5,5% informe 5.5*/
    function setJuros($Juros) {
        $this->Juros = $Juros;
    }

    function setEncargos() {
        $this->Encargos = ($this->Valor * ($this->Juros / 100)) * $this->NumParcelas;
    }

    function setNumParcelas($NumParcelas) {
        $this->NumParcelas = ( (int) $NumParcelas >= 1 ? $NumParcelas : 1);
    }
    
}
