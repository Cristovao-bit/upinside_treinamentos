<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Modelo de Composição</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            
            $cristovao = new ComposicaoUsuario('Cristovão L. Braga', 'contato@manutencaolira@outlook.com');
            $cristovao->CadastrarEndereço('Esperança', 'Paraíba');
            
            echo "O email de {$cristovao->Nome} é {$cristovao->Email}<br>";
            echo "{$cristovao->Nome} mora em {$cristovao->getEndereço()->getCidade()}/{$cristovao->getEndereço()->getEstado()}";
            echo "<hr>";
            
            var_dump($cristovao);
            
        ?>
    </body>
</html>
