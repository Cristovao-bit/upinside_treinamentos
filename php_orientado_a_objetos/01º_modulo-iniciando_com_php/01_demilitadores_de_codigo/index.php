<?php

header('Content-Type: text/html; charset=utf-8');

//Três tipos de comentários

//Comentátio de código

/*
*Comentário recursivo
*/

/*
comentário de várias linhas
*/

$ola = "Olá Mundo";
$nome = "Cristovão Lira Braga";

echo $ola;
echo "<hr>";

echo '$ola';
echo "<br>";
echo "$ola";
echo "<br>";
echo $ola;
echo "<br>";
echo "{$ola}s";
echo "<br>";
echo "{$ola}, meu nome é {$nome}!";
echo "<hr>";

print("{$ola}<br>");

$Arr = array(
    "ola" => "Olá Mundo!",
    "nome" => "Cristovão Lira Braga"
);

print_r($Arr);

$idade = 25;
echo $idade;
echo "<br>";

var_dump($idade);
echo "<br>";
var_dump($Arr);
echo "<br>";
var_dump($ola);
echo "<hr>";
?>

<article>
    <h1><?= $ola; ?></h1>
    <p>Meu nome é <?php echo $nome; ?></p>
</article>