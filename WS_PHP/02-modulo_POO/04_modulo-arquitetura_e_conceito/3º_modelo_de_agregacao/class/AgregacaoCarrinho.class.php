<?php

class AgregacaoCarrinho {
    
    private $Cliente;
    private $Produto;
    private $Total;
    
    function __construct(AssociacaoCliente $Cliente) {
        $this->Cliente = $Cliente;
        $this->Produto = array();
    }

    public function Add(AgregacacaoProduto $Produto) {
        $this->Produto[$Produto->getProduto()] = $Produto;
        $this->Total += $Produto->getValor();
        $this->VerCarrinho($Produto, 'Adicionou');
    }
    
    public function Remove(AgregacacaoProduto $Produto) {
        unset($this->Produto[$Produto->getProduto()]);
        $this->Total -= $Produto->getValor();
        $this->VerCarrinho($Produto, 'Removeu');
    }
    
    public function VerCarrinho(AgregacacaoProduto $Produto, $Action) {
        echo "Você {$Action} um {$Produto->getNome()} em seu carrinho. Valor R$ {$this->Total}<hr>";
    }
}
