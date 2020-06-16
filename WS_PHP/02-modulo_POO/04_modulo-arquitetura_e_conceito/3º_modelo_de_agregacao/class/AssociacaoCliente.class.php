<?php

class AssociacaoCliente {
    
    private $Cliente;
    private $Nome;
    private $Email;
    
    function __construct($Nome, $Email) {
        $this->Cliente = md5($Nome);
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    public function getCliente() {
        return $this->Cliente;
    }
    
    public function getNome() {
        return $this->Nome;
    }

    public function getEmail() {
        return $this->Email;
    }

}
