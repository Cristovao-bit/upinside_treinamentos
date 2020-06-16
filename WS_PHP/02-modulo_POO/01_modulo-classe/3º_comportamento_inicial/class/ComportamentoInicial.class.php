<?php
class ComportamentoInicial {
    
    var $Nome, $Idade, $Profissao, $Salario;
    
    function __construct($Nome, $Idade, $Profissao, $Salario) {
        $this->Nome = (string) $Nome;
        $this->Idade = (int) $Idade;
        $this->Profissao = (string) $Profissao;
        $this->Salario = (float) $Salario;
        echo "O objeto {$this->Nome} foi iniciado!<hr>";
    }
    
    function __destruct() {
        echo "O objeto {$this->Nome} foi destruido!<hr>";
    }
            
    function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
}
