<?php

header('content-type: text/html; charset: utf-8');

//STR = string
$str = "Olá mundo!";
var_dump($str);
echo "<hr>";

//ARR = array
$arr = array();
$arr['nome'] = "Cristovão";
$arr['idade'] = 25;
var_dump($arr);
echo "<hr>";

//BOOL = Boleano
$bool = true;
$idade = 25;
$velho = ($idade > 40);
var_dump($bool);
//if($bool):
//    echo "TRUE";
//else:
//    echo "FALSE";
//endif;
echo "<hr>";

$opa = null;//dentro do boleano isso é considerado como false.
$int = 0;
$str = "";
$arr = array();

//Int = Inteiro
$int = 25;
var_dump($int);
echo "<hr>";

//Float = Flutuante
$flt = 0.875;
var_dump($flt);
echo "<hr>";

//Numéricas
$numInt = 1234567;
var_dump($numInt);
echo "<br>";

$numFlt = 0.875;
var_dump($numFlt);
echo "<br>";

$numNegativo = -340;
var_dump($numNegativo);
echo "<br>";

$numCalc = 2*2.86;
var_dump($numCalc);

echo "<hr>";

//Obj = Objeto
$obj = new stdClass();
$obj->Nome = "Cristovão Lira Braga";
$obj->idade = 25;
var_dump($obj);
