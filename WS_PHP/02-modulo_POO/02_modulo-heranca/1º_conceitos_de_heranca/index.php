<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Conceito de Herança</title>
    </head>
    <body>
        <?php
        
            require ('./inc/config.inc.php');
            $pessoa = new Heranca('Cristovão Lira Braga', 25);
            $pessoa->Formar('PRO PHP');
            $pessoa->Formar('WS PHP');
            $pessoa->Envelhecer();
            $pessoa->VerPessoa();
            
            var_dump($pessoa);
            echo "<hr>";
            
            $pessoaME = new HerancaJuridica('Nataly Lira Braga', 22, 'UPINSIDE TECNOLOGIA');
            $pessoaME->Formar('WEB DESIGN');
            $pessoaME->Formar('WS PHP');
            $pessoaME->Envelhecer();
            $pessoaME->VerPessoa();
            
            $pessoaME->Contratar('Sidrac');
            $pessoaME->Contratar('Simão');
            $pessoaME->VerEmpresa();
            
            var_dump($pessoaME);
            
        ?>
    </body>
</html>
