<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Resolução de Escopo</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            
            $produto = new ResolucaoDeEscopo('Livro de PHP', 59.90);
            $digital = new ResolucaoDeEscopoDigital('Livro de PHP', 39.90);
            
            $produto->Vender();
            $produto->Vender();
            $produto->Vender();
            
            $digital->Vender();
            $digital->Vender();
            
//            $produto->Relatorio();
            ResolucaoDeEscopo::Relatorio();
//            echo "O produto PHP vendeu " . ResolucaoDeEscopo::$Vendas . "<hr>";
            echo ResolucaoDeEscopoDigital::$Digital . " Livros Digitais <br>";
            echo ResolucaoDeEscopo::$Vendas - ResolucaoDeEscopoDigital::$Digital . " Livros Impressos<hr>";
            
            
            var_dump($produto, $digital);
        
        ?>
    </body>
</html>
