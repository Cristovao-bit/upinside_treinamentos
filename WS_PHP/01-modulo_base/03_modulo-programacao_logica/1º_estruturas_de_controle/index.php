<?php

//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//SE, SENÃO
$test = true;
if ($test):
    echo "true";
else:
    echo "false";
endif;

echo "<hr>";

//SE, SENÃO SE, SENÃO
$test = true; //E no caso o else so apresentaria se a minha variável $test tivesse o valor false. O else vai ser sempre o resultado final.
$result = 876; //No caso elseif apresentaria se a minha variavel não tivesse valor nem um.
if ($test && !empty($result)):
    echo "Teste positivo {$result}";
elseif ($test && empty($result)):
    echo "Teste positivo mas sem resultados!";
else:
    echo "Teste negativo!";
endif;

echo "<hr>";

//BATERIA
$mes = 2;//se o mês fosse outro como exemplo o mes 6 apresentaria no browser o default.
switch ($mes):
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    default:
        echo "Teste Inválido!";
        break;
endswitch;

echo "<hr>";

$mesMais = 6;
switch ($mesMais):
    case 4:
    case 5:
    case 6:
        echo "Ainda estamos no primeito semestre!";
        break;
    default:
        echo "passamos!";
        break;
endswitch;

echo "<hr>";
$Visita = "Visita Agendada!";
$dia = 6;
switch ($Visita && !empty($dia)):
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16:
    case 17:
    case 18:
    case 19:
    case 20:
    case 21:
    case 22:
    case 23:
    case 24:
    case 25;
    case 26:
    case 27:
    case 28:
    case 29:
    case 30:
    case 31:
        echo "Sua visita foi marca para o dia {$dia}";
        break;
    default:
        echo "Infelizmente sua visita terá que ser marcada para outro dia!";
        break;
endswitch;

