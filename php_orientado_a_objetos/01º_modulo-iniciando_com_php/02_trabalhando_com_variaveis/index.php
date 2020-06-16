<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-Type: text/html; charset=utf-8');

$MeuNome = "Cristovão Lira Braga";
$minha_empresa = "ML - Manutenção Lira";

$idadedocliente = 25;
$idade_do_cliente = 26;

echo "Meu nome é {$MeuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadedocliente} anos!<hr>";

//var de referência!
$var = "empresa";
$$var = "Manutenção Lira";
echo "Minha {$var} é a {$empresa}<hr>";

//Reescrita!
$nome = "Marcos";
echo "{$nome}<br>";

$nome = "Cristovão";

//Concatenação!
$nome .= " Lira Braga";
echo "{$nome}<br>";

$nome = $MeuNome;
echo "{$nome}<br>";