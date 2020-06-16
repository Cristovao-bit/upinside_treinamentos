<?php

class AcessoPrivado {
    
    private $Nome;
    private $Email;
    private $CPF;
    
    function __construct($Nome, $Email, $CPF) {
        $this->setNome($Nome);
        $this->setEmail($Email);
        $this->setCpf($CPF);
    }
    
    public function setNome($Nome) {
        if($Nome && is_string($Nome)):
            $this->Nome = $Nome;
        else:
            die('Erro no nome!');
        endif;
    }
    
    public function setEmail($Email) {
        if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
            $this->Email = $Email;
        else:
            die('Erro no email!');
        endif;
    }

    public function setCpf($CPF) {
        if(preg_match('/[0-9]*/i', $CPF) && strlen($CPF) == 11):
            $this->CPF = $CPF;
        else:
            die('Erro no cpf!');
        endif;
    }
    
}
