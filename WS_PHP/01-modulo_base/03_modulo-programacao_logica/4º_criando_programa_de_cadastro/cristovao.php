<?php

header('content-type: text/html; charset: utf-8');

function EmailValidado($Email){
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
};

$Nome = "Cristovão Lira Braga";
$Email = "manutencaolira@gmail.com";

if(empty($Nome) || empty($Email)):
    echo "Ops! Campos vázio, preencha por favor.";
elseif(!EmailValidado($Email)):
    echo "Ops! Forma de email inválido, por favor preencha corretamente.";
else:
    $Users = [
        'ml.manutencaolira@gmail.com',
        'ML_servico@outlook.com'
    ];
    if(in_array($Email, $Users)):
        echo "Ops! Email já cadastrado. Quer logar? <a href='#!'>Sim</a>";
    else:
        echo "Email cadastrado com sucesso!";
    endif;
endif;