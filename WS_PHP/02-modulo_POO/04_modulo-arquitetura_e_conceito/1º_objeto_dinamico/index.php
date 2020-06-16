<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Objeto Dinâmico</title>
    </head>
    <body>
        <?php
        
            require ('./inc/config.inc.php');
            
            $cliente = new ObjetoDinamico;
            
            $cristovao = new stdClass();
            $cristovao->Nome = 'Cristovão L. Braga';
            $cristovao->Email = 'ML_servicos@outlook.com';
            
            $cliente->Novo($cristovao);
            
            $marcos = clone($cristovao);
            $marcos->Nome = "Marcos";
            $marcos->Email = 'banana';


            var_dump($cliente, $cristovao, $marcos);
        
        ?>
    </body>
</html>
