<?php
class InteracaoDeClasse{
    
    public $Nome;
    public $Idade;
    public $Empresa;
    public $Salario;
    public $Profissao;
    public $Conta;
    
    function __construct($Nome, $Idade, $Profissao, $Conta) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->Conta = $Conta;
    }
    
    public function Trabalhar($Empresa, $Salario, $Profissao) {
        $this->Empresa = $Empresa;
        $this->Salario = $Salario;
        $this->Profissao = $Profissao;
    }
    
    public function Receber($Valor) {
        $this->Conta += $Valor; 
    }
    
    public function ver() {
        echo "<pre>";
        print_r($this);
        echo "<pre>";
    }
    
}
