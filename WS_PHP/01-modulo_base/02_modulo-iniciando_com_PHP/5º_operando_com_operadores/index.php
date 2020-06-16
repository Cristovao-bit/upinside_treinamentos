<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//ATRIBUIÇÃO
$var = 10;
$var += 5;//soma
$var -= 10;//subtrai
$var *= 10;//Multiplica
$var /= 5;//dividir

var_dump($var);
echo "<hr>";

//ARITIMÉTICOS
$a = 10;
$b = 5;
$c = $a + $b;
$c = $a + $b * $b;
$c = ($a + $b) * $b;

var_dump($c);
echo "<hr>";

//RELACIONAIS
$a = 5;
$b = "5";

if($a = $b):
    echo "A igual a B";
endif;

if($a == $b): endif; //Se igual
if($a === $b): endif; //Se identico
if($a != $b): endif; //Se diferente
if($a !== $b): endif; //Se não identico
if($a > $b): endif; //Se maior
if($a >= $b): endif; //Se maior ou igual
if($a < $b): endif; //Se menor
if($a <= $b): endif; //Se menor ou igual

//EXISTENCIA
if($a): endif; //Se existe
if(!$a): endif; //Se não exite
if(isset($a)): endif; //Se existe
if(!isset($a)): endif; //Se não exite
if(empty($a)): endif; //Não existe ou estiver vázia
if(!empty($a)): endif; //Se exite e tem valor

echo "<hr>";

//LÓGICOS
$l = "";
$s = "Manutenção Lira";

if($l && $s):
    echo "Existe as duas!";
endif;

if($l || $s):
    echo "Existe as duas!";
endif;

echo "<hr>";

if(empty($l) && $s == "Manutenção Lira" || 1 == 1):
    echo "true";
else:
    echo "false";
endif;