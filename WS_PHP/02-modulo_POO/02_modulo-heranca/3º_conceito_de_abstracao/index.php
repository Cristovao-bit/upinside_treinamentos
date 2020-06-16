<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Conceito de Abstração</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            
//            $conta = new Abstracao('Cristovão L. Braga', 500);
//            $contaDois = new Abstracao('Mª Betânia L. Braga', 300);
//            
//            $conta->Depositar(1000);
//            $conta->Sacar(500);
//            $conta->Tranferir(500, $conta);
//            $conta->Tranferir(500, $contaDois);
//            
//            var_dump($conta, $contaDois);
            
            $cc = new AbstracaoCC('Cristovão L. Braga', 0, 1000);
            $cp = new AbstracaoCP('Cristovão L. Braga', 0);
            
            $cc->Depositar(1000);
            $cc->Sacar(500);
            $cc->Tranferir(500, $cp);
            
            $cp->Depositar(1000);
            $cp->Sacar(500);
            $cp->Tranferir(500, $cc);
            
            $cc->VerSaldo();
            $cp->VerSaldo();
            
            var_dump($cc, $cp);
        ?>
    </body>
</html>
