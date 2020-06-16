<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Acesso Privado</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            $cristovao = new AcessoPrivado('Cristovão', 'ML_servicos@outlook.com', 08967846495);
            //$cristovao->
            
            var_dump($cristovao);
            
        ?>
    </body>
</html>
