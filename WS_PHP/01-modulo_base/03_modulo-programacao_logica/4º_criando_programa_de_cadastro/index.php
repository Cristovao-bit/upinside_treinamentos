<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//FUNCAO
function EmailValidado($Email){
    if(filter_var($Email, FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
}

$Nome = "Cristovão Lira Braga";
$Email = "ML_servico@outlook.com";

if(empty($Nome) || empty($Email)):
    echo "Ops! Informe seu Nome e Email";
elseif(!EmailValidado($Email)):
    echo "Ops! Informe um email válido!";
else:
    $Users = [
        'ml.manuntecaolira@gmail.com',
        'maria@gmail.com'
    ];
    if (in_array($Email, $Users)):
        echo "Ops. Você já cadastrado seu Email. Deseja Logar? <a href='#'>Sim</a>";
    else:
        echo "Cadastro realizado com sucesso!";
    endif;
endif;
