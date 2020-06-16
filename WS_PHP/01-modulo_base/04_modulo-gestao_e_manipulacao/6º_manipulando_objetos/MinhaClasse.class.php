<?php
class MinhaClasse {
    public $Nome;
    public $Empresa;
    public $Ramo;
    
    function getNome() {
        return $this->Nome;
    }

    function getEmpresa() {
        return $this->Empresa;
    }

    function getRamo() {
        return $this->Ramo;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setEmpresa($Empresa) {
        $this->Empresa = $Empresa;
    }

    function setRamo($Ramo) {
        $this->Ramo = $Ramo;
    }    

}
