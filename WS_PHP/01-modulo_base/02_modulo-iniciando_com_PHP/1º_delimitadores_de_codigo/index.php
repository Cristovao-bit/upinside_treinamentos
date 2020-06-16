<?php

header('content-type: text/html; charset: utf-8');

// comentário de código

/*
 * comentário recursivo 
 */

/*
   comentário de várias linhas
 */

$ola = "Olá mundo";
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
    "ola" => "Olá mundo!",
    "nome" => "Cristovão Lira Braga"
);

print_r($Arr);

$idade = 25;
echo $idade;

echo "<hr>";

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