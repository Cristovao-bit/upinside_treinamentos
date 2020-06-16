<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Carga Automática</title>
    </head>
    <body>
        <?php
            
           require ('./inc/config.inc.php');
           
           $classeA = new ClassesObjetos;
           $classeB = new AtributosMetodos;
           $classeC = new ComportamentoInicial('Cristovão', 25, 'Programador', 2200);
           $classeC = new ComportamentoInicialTeste('Cristovão', 25, 'Programador', 2200);
           
           var_dump($classeA, $classeB, $classeC);
        ?>
    </body>
</html>
