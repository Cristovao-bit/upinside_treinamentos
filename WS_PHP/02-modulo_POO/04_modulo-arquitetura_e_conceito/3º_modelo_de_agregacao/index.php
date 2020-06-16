<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Modelo de Agregação</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            
            $cecilia = new AssociacaoCliente('Cecília', 'cecilia@gmail.com');
            $frozen = new AgregacacaoProduto('20', 'Boneca da Frozen', 334.90);
            $lol = new AgregacacaoProduto('21', 'Boneca da LOL', 289.90);
            $bbalaive = new AgregacacaoProduto('20', 'boneca da bbalaive', 289.90);
            
            $outroproduto = new stdClass();
            $outroproduto->Produto = '23';
            $outroproduto->Nome = 'Boneca da Frozen';
            $outroproduto->Valor = 400;
            
            $carrinho = new AgregacaoCarrinho($cecilia);
            
            $carrinho->Add($frozen);
            $carrinho->Add($lol);
            $carrinho->Add($bbalaive);
            
            $carrinho->Remove($frozen);
            
            //$carrinho->Add($outroproduto);
            
            var_dump($carrinho);
            echo "<hr>";
            var_dump($cecilia, $frozen, $outroproduto);
            
        ?>
    </body>
</html>
