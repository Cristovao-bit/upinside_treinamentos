<?php

class HerancaJuridica extends Heranca {
    
    public $Empresa;
    public $Funcionrios;
    
    function __construct($Nome, $Idade, $Empresa) {
        parent::__construct($Nome, $Idade);
        $this->Empresa = $Empresa;
    }
    
    public function Contratar($Pessoa) {
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa}<hr>";
        $this->Funcionrios += 1;
    }
    
    public function VerEmpresa() {
        echo "{$this->Empresa} foi fundada por {$this->Nome} e tem {$this->Funcionrios}<br><small style='color:#09f;'>";
        parent::VerPessoa();
        echo "</small>";
    }
    
}
