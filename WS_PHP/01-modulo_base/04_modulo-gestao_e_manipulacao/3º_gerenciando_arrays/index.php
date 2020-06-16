<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

$Pessoa = [];
$Pessoa ['nome'] = "Cristovão L. Braga <script><?=";
$Pessoa = array_pad($Pessoa, 5, null);//criação de 5 indices null

//Corrigindo erros 
$Pessoa = array_filter($Pessoa);//Limpeza dos indices null
$Pessoa = array_map('strip_tags', $Pessoa);//remoção dos erros de código
$Pessoa = array_map('trim', $Pessoa);//remoção do espaço

array_push($Pessoa, 25);//add um novo indice no final.
array_pop($Pessoa);//remove um novo indice no final.
array_unshift($Pessoa, 25);//add um novo indice no início.
array_shift($Pessoa);//remove um novo indice no início.

$Pessoa ['idade'] = 25;
$Pessoa ['job'] = "Webmaster";
$Pessoa = array_reverse($Pessoa);

$Empresa ['empresa'] = "UpInside Treinamentos";
$Empresa ['atuacao'] = "Treinamentos Web";

$Casa ['cidade'] = "Floripa";

$Pessoa = array_merge($Pessoa, $Empresa, $Casa);

var_dump($Pessoa);
echo "<hr>";
var_dump(array_keys($Pessoa));
echo "<hr>";
var_dump(array_values($Pessoa));
echo "<hr>";
var_dump(array_slice($Pessoa, 2));
echo "<hr>";
var_dump("O array tem " . count($Pessoa) . " índice!");
echo "<hr>";

if(in_array("UpInside", $Pessoa))://se eu colocar UpInside Treinamentos vai apresentar existe.
    echo "Existe!";
else:
    echo "Não existe!";
endif;

echo "<hr>";

//Ordenar um array (Arrays para gerencia dados).
asort($Pessoa);//ordenando pelo valor 
arsort($Pessoa);//ordenando reversarmento pelo valor
ksort($Pessoa);//ordenando pelo índice
krsort($Pessoa);//ordenando reversamente pelo índice
sort($Pessoa);
rsort($Pessoa);

var_dump($Pessoa);
echo "<hr>";

$Nomes = "Cristovão, Steve Jobs, Robson";
$Nomes = explode(", ", $Nomes);//transformando string em array
$Nomes = implode($Nomes, ", ");//retornando array em string

var_dump($Nomes);