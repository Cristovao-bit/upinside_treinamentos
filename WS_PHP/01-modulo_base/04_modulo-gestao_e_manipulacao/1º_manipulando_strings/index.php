<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

$nome = "Cristovao Lira Braga <br>";
echo strtoupper($nome);
echo strtolower($nome);
echo ucwords($nome);
echo ucfirst(strtolower($nome));

echo "<hr>";

//TRATAR UMA IMAGEM
$img = "NOME DA IMAGEM.jpg";

$imagem = strtolower(str_replace(' ', '-', $img));
echo $imagem;

echo "<hr>";

for($i = 1; $i <= 10; $i++):
    echo str_pad($i, 2, 0, STR_PAD_LEFT) . "<br>";
endfor;

echo "<hr>";

$escreva = "Desculpa, ";
echo str_repeat($escreva, 100);

echo "<hr>";

$Novonome = "Cristovão L. Braga";
echo substr($Novonome, 0, 10);
echo "<br>";

echo substr($Novonome, 0, strpos($Novonome, ' '));
echo substr($Novonome, strpos($Novonome, ' '));
echo "<br>";

echo substr($Novonome, 0, strpos($Novonome, ' '));
echo substr($Novonome, strrpos($Novonome, ' '));

$exten = substr($img, strrpos($img, '.'));
echo "<br>{$exten}";

$ext = substr($img, strrpos($img, '.') + 1);
echo "<br>{$ext}";