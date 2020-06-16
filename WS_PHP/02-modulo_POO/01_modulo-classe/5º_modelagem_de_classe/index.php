<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Modelagem de Classe</title>
    </head>
    <body>
        <?php
            
            require ('./class/ModelagemDeClasse.class.php');
            
            $cristovao = new ModelagemDeClasse('Cristovão', 25, 'Programador', 1200);
            $cristovao->setProfissao('Web Master');
            
            $cristovao->Trabalhar('portal', 12000);
            
            $cristovao->ver();
            
        ?>
    </body>
</html>
