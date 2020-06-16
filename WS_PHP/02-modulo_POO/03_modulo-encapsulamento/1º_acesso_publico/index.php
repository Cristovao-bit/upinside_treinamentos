<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Acesso Publico</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            
            $cristovao =  new AcessoPublico('Cristovao', 'campus@outlook.com');
            $cristovao->Nome = 'Christopher';
            $cristovao->Email = 'christopher@gmail.com';
            
            //error de acesso publico é que não tem nem uma responsabilidade com o atributo.
            $cristovao->Email = 'Banana';
            
            var_dump($cristovao);
            
        ?>
    </body>
</html>
