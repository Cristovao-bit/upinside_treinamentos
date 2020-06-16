<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

$bolsa = "preta";
if(!empty($bolsa)):
    if($bolsa == "vermelha"):
        echo "Amor encontrei a bolsa. Estou levando a vermelha!";
    else:
        echo "Amor não tinha vermelha, estou levando a preta!";
    endif;
    else:
        echo "Infelizmente não tem mas a bolsa! :/";
endif;

echo "<hr>";

//Código feito atráves do curso
$bolsafeminina = "verde";
if(!empty($bolsafeminina)):
    if($bolsafeminina == "vermelha"):
        echo "Amor, comprei a bolsa que você queria!";
    elseif($bolsafeminina == "preta"):
        echo "Amor, comprei a preta pois não tinha a vermelha!";
    else:
        echo "Alô amor, não tem as cores que você quer.Posso comprar outra cor?<br>";
        $Amor = false;
        if($Amor):
                echo "Pode sim amor. Traga qualquer uma!";
            else:
                echo "O sofa te espera!";
        endif;
    endif;
    else:
        echo "Amor. Não tem mais a bolsa :/";
endif;

echo "<hr>";

$castigo = "rua";
if(!empty($castigo)):
    if($castigo == "sem net"):
        echo "Menino levado da breca. Uma semana sem net.";
    elseif($castigo == "sem videogame"):
        echo "Menino levado vai ficar um mes sem videogame!";
    else:
        echo "Mas mãe me dê outro castigo. Eu cumpro sem pestanegar!<br>";
        $Mãe = false;
        if($Mãe):
            echo "Sim meu lindo filho, você vai ficar um mes sem brincar na rua.";
        else:
            echo "Após só porque você pediu vai ficar dois meses sem videogame.";
        endif;
    endif;
    else:
        echo "O castigo para você será ficar sem castigo.";
endif;