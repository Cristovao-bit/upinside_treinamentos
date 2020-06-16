<?php

class ComposicaoUsuario {
    
    public $Nome;
    public $Email;
    private $Endereço;
    
    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    public function CadastrarEndereço($Cidade, $Estado) {
        $this->Endereço = new ComposicaoEndereco($Cidade, $Estado);
    }
    
    /** @return ComposicaoEndereco */
    public function getEndereço() {
        return $this->Endereço;
    }
}
