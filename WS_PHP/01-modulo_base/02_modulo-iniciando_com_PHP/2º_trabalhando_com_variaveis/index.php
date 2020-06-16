<?php

//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

$meuNome = "Cristovão Lira Braga";
$minha_empresa = "ML - Manutenção Lira";

$idadeDocliente = 25;
$idade_do_cliente = 26;

echo "Meu nome é {$meuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadeDocliente} anos!<hr>";

//Variavéis de referência!
$var = "empresa";
$$var = "Manutenção Lira";
echo "Minha {$var} é a {$empresa}<hr>";

//Reescrita
$Nome = "Cristovão";
echo "{$Nome}<br>";
$Nome = "Cristovão";

//Concatenação
$Nome .= " Lira";
echo "{$Nome}<br>";

$Nome = $meuNome;
echo $Nome;