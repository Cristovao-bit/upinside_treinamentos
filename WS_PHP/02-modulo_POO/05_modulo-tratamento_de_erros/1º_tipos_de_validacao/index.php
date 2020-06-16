<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Tipos de Validação</title>
    </head>
    <body>

        <h3>Tratamento por Existência:</h3>
        <hr>

        <?php
        $String = 'contato';
        $String = 3;
        $String = '';

        if (is_string($String)):
            echo "String é uma string!";
        elseif (!is_string($String)):
            echo "String não é uma string!";
        endif;

        echo "<hr>";

        if (!empty($String)):
            echo "String existe e tem valor!";
        elseif (isset($String)):
            echo "String existe mas está em branco!";
        endif;
        ?>

        <hr><hr>
        <h3>Tomada de Decisão:</h3>
        <hr>

        <?php
        //$decisao = 'contato';
        $decisao = 'contato@gmail.com';
        //$decisao = 'campus@upinside.com.br';

        if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
            echo "Email informado é inválido!";
        elseif ($decisao == 'campus@upinside.com.br'):
            die ('Email restrito!');
        else:
            echo "Email Válido";
        endif;
        
        echo " :)";
        ?>
        
        <hr><hr>
        <h3>Retorno de Flags:</h3>
        <hr>
        
        <?php
        
        function Idade($Idade = null){
            if(!$Idade):
                return false;
            elseif (!is_int($Idade)):
                return false;
            endif;
            
            return "Você nasceu em: " . ( date('Y') - $Idade );
            
        }
        
        //$Idade = 'abs';
        //$Idade = '26';
        //$Idade = 48;
        //$Idade = 22;
        $Idade = 7;
        
        if(Idade($Idade)):
            echo Idade($Idade);
        else:
            echo "Erro, informe um INT idade";
        endif;
        
        ?>
        
        <hr><hr>
        <h3>Comparação:</h3>
        <hr>
        
        <?php
        
        $um = 10;
        $dois = '12';
        
        if($um == $dois):
            echo "um tem o mesmo valor que dois!";
        elseif($um != $dois):
            echo "um e dois tem valores diferentes!";
        endif;
        
        echo "<hr>";
        
        $um = 10;
        $dois = 10;
        
        if($um === $dois):
            echo "um e dois tem o mesmo valor e são do mesmo tipo!";
        elseif($um !== $dois):
            echo "um e dois tem valor e tipos diferentes!";
        endif;
        
        ?>

    </body>
</html>
