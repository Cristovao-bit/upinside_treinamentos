<?php
class ReplicaClonagem {

    var $Tabela;
    var $Termos;
    var $AddQuery;
    var $Query;
    
    function __construct($Tabela, $Termos, $AddQuery) {
        $this->Tabela = $Tabela;
        $this->Termos = $Termos;
        $this->AddQuery = $AddQuery;
    }
    
    function setTabela($Tabela) {
        $this->Tabela = $Tabela;
    }

    function setTermos($Termos) {
        $this->Termos = $Termos; 
    }
    
    function Ler() {
        $this->Query = "SELECT * FROM {$this->Tabela} WHERE {$this->Termos} {$this->AddQuery}";
        echo "{$this->Query}<hr>";
    }
    
    function ver() {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}
