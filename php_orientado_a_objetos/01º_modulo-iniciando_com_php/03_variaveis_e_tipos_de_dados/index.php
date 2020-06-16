<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-Type: text/html; charset=utf-8');

//STR = string
$str = "Olá Mundo!<br>";
var_dump($str);

//ARR = array
$arr = array();
$arr['Nome'] = "Cristovão";
$arr['Idade'] = 25;
var_dump($arr);
echo "<hr>";

//BOOL = boleano
$bool = true;
$idade = 25;
$velho = ($idade > 22);

var_dump($bool);
//if($bool):
//    echo "TRUE";
//else:
//    echo "FALSE";
//endif;

$opa = null;//é uma variavel que dentro de um bool pode ser considerado falso. Outro exemplos abaixo
$int = 0;
$str = "";
$arr = array();
echo "<hr>";


//Int = inteiro
$int = 25;
var_dump($int);
echo "<hr>";

//Float =Flutuante
$flt = 0.8;
var_dump($flt);
echo "<hr>";

//NUMÉRICAS
$numInt = 1276523;
var_dump($numInt);
echo "<hr>";

$numNegativo = -340;
var_dump($numNegativo);
echo "<hr>";

$numflt = 0.8;
var_dump($numflt);
echo "<hr>";

$numCalc = 2*2.86;
var_dump($numCalc);
echo "<hr>";