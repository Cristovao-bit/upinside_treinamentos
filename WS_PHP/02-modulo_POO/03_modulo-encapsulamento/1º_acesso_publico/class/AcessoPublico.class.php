<?php

class AcessoPublico {
    
    public $Nome;
    public $Email;
    
    function __construct($Nome, $Email) {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }
    
    public function setEmail($Email) {
        if(!filter_var($Email, FILTER_VALIDATE_EMAIL)):
            die('Email Inválido!');
        else:
            $this->Email = $Email;
        endif;
    }

    
}
