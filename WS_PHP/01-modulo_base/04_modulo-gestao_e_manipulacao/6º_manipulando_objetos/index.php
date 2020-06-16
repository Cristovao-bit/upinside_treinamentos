<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//include './MinhaClasse.class.php';//se ouver um erro no nome do arquivo, pode ser acrescentado @ antes do nome include para corrigir esse erro.
require 'MinhaClasse.class.php';//com o require simplesmente da o erro e não da continuidade no codigo que no caso do include apresenta o codigo em seguida.
require 'SegundaClasse.class.php';

$CristovaoL = new SegundaClasse;
$CristovaoL->setNome('Cristovão L. Braga');
$CristovaoL->setEmpresa('UpInside Treinamentos');
$CristovaoL->setRamo('Cursos Web');
$CristovaoL->setIdade(25);

var_dump($CristovaoL);
echo "<hr>";
var_dump(get_class_methods($CristovaoL));//todos os metodos das minhas variáveis
echo "<hr>";
var_dump(get_class_vars('SegundaClasse'));
echo "<hr>";
var_dump(get_class($CristovaoL));
echo "<hr>";
var_dump(get_parent_class($CristovaoL));
echo "<hr>";
var_dump(is_subclass_of($CristovaoL, 'MinhaClasse'));
echo "<hr>";
var_dump(method_exists($CristovaoL, 'getNome'));
echo "<hr>";
var_dump(call_user_func('strtoupper', $CristovaoL->getNome()));
echo "<hr>";
var_dump(call_user_func(array($CristovaoL, 'getIdade')));