<?php

class AssociacaoLogin {

    /** @var AssociacaoCliente */
    private $Cliente;
    private $Login;

    function __construct($Cliente) {
        if (is_object($Cliente)):
            $this->Cliente = $Cliente;
            $this->Login = TRUE;
        else:
            die('Erro ao Logar!');
        endif;
    }
    
    public function getCliente(){
        return $this->Cliente;
    }

    
    public function getLogin() {
        return $this->Login;
    }

}
