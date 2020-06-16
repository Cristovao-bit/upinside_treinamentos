<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Comportamento Inicial - PHP</title>
    </head>
    <body>
        <?php
        require ('./class/ComportamentoInicial.class.php');

//            $Cristovao = new ComportamentoInicial;
//            $Cristovao->Nome = 'Cristovão L. Braga';
//            $Cristovao->Salario = 'Banana';

            $Cristovao = new ComportamentoInicial('Cristovão', 25, 'Programador', 3600);
            $Nataly = new ComportamentoInicial('Nataly', 22, 'Programador', 5600);
            $Cecília = new ComportamentoInicial('Cecília', 7, 'Programador', 1600);
            $Cristovao->ver();
        
            
        ?>
    </body>
</html>
