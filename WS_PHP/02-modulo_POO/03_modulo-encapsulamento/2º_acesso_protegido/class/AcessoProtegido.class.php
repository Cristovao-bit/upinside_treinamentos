<?php

class AcessoProtegido{
    
    public $Nome;
    protected $Email;
    
    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }
    
    public function setEmail($Email) {
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die ('Email Inválido!');
        else:
            $this->Email = $Email;
        endif;
    }

    final protected function setNome($Nome) {
        $this->Nome = $Nome;
    }
}

class AcessoProtegidoFilha extends AcessoProtegido {
    
    protected $CPF;
    
    public function AddCpf($Nome, $Cpf) {
       parent::setNome($Nome);
       $this->CPF = $Cpf;
    }
    
}