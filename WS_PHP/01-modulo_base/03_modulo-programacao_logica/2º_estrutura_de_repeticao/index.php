<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//WHILE: Enquanto acontecer;
$i = 1;
while($i <= 10):
    echo "{$i} x 6 = " . $i * 6 . "<br>";
    $i ++;
endwhile;
echo "<hr>";

//FOR = Execute x vezes
for($e = 1; $e <= 10; $e ++):
 echo "{$e} x 10 = " . $e * 10 . "<br>";
endfor;
echo "<hr>";

//FOREACH: Arrays;
$Arr = ['WS PHP', 'WS HTML5', 'WS RWD', 'WS PP'];
foreach ($Arr as $Cursos):
    echo "Meu Treinamento tem o curso {$Cursos}<br>";
endforeach;
echo "<hr>";

$ArrName = ['Nome' => 'Cristovão L. Braga', "Idade" => 25];
foreach($ArrName as $Key => $Value):
    echo "{$Key} = {$Value}<br>";
endforeach;