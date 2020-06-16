<?php

class AgregacacaoProduto {
    
    private $Produto;
    private $Nome;
    private $Valor;
    
    function __construct($Produto, $Nome, $Valor) {
        $this->Produto = $Produto;
        $this->Nome = $Nome;
        $this->Valor = $Valor;
    }

    public function getProduto() {
        return $this->Produto;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function getValor() {
        return $this->Valor;
    }


    
}
