<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//ARRAY RELACIONAL
$Arr = array('PHP', 'HTML', 'CSS');
$Arr [5] = 'JS';
var_dump($Arr);

echo "<br>";

$ArrB = array('PHP', 'HTML', 'CSS');
$ArrB [] = 'JS';
var_dump($ArrB);

echo "<hr>";

foreach ($ArrB as $Lang):
    echo "{$Lang}<br>";
endforeach;

echo "<hr>";

//ASSOCIATIVO
$ArrC = [
    "Cargo" => "Programador",
    "Salário" => 2200
];

$ArrC ['Empresa'] = "UpInside <?=";//exemplo para ser corrigido
$ArrC ['Cargo'] = "Webmaster";
$ArrC ['Salário'] += 5000;
$ArrC ['Cargo'] .= "/Programador";

//Para corrigir erros que já vem em escripts que você que zerar tudo
$ArrC = array_map('strip_tags', $ArrC);//eliminando o código
$ArrC = array_map('trim', $ArrC);//eliminando espaço

var_dump($ArrC);

echo "<br>";
echo "Eu sou {$ArrC['Cargo']} na {$ArrC['Empresa']}!";

echo "<br>";
extract($ArrC);
echo "Eu sou {$Cargo} na {$Empresa} e ganho {$Salário} por mês!";
echo "<br>";
echo "Eu sou {$Cargo} na {$Empresa} e ganho R$ " . number_format($Salário, 2, ',', '.') . " por mês!";
echo "<hr>";

//MULTIDIMENSIONAL
$colaboradores = [];
$colaboradores[] = ["Nome" => "Cristovão L. Braga", "Salário" => 7200, "Cargo" => "Webmaster"];
$colaboradores[] = ["Nome" => "Nataly L. Braga", "Salário" => 1800, "Cargo" => "Aprendiz"];
$colaboradores[] = ["Nome" => "Maria Cecília de L. Vasconcelos", "Salário" => 1800, "Cargo" => "Aprendiz"];

foreach ($colaboradores as $Cargo):
    extract($Cargo);
    echo "{$Nome} é {$Cargo} e recebe R$ " . number_format($Salário, 2, ',', '.') . " por mês!<br>";
endforeach;

echo "<hr>";
var_dump($colaboradores);