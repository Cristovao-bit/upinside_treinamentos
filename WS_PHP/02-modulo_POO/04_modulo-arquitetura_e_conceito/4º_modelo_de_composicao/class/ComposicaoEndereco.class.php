<?php

class ComposicaoEndereco {
    
    private $Cidade;
    private $Estado;
    
    function __construct($Cidade, $Estado) {
        $this->Cidade = $Cidade;
        $this->Estado = $Estado;
    }

    public function getCidade() {
        return $this->Cidade;
    }

    public function getEstado() {
        return $this->Estado;
    }
    
}
