<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Interação de Objetos</title>
    </head>
    <body>
        <?php
            
            require ('./class/InteracaoDeClasse.class.php');
            require ('./class/InteracaoDeObjetos.class.php');
            
            $cristovao = new InteracaoDeClasse('Cristovão L. Braga', 25, 'Programador', 1000);
            $marcos = new InteracaoDeClasse('Marcos', 27, 'Web Design', 500);
            
            $upinside =  new InteracaoDeObjetos('UPINSIDE TECNOLOGIA');
            $upinside->Contratar($cristovao, 'Web Master', 3600);
            $upinside->Pagar();
            $upinside->Promover('Gerente de Projetos', 12000);
            $upinside->Pagar();
            //$upinside->Demitir(5600);
            
            $upinside->Contratar($marcos, 'Design', 2200);
            $upinside->Pagar();
            $upinside->Pagar();
            $upinside->Promover('Administrador de Projetos');
            
            $upinside->Funcionarios($cristovao);
            $upinside->Pagar();
            
            $cristovao->ver();
            $marcos->ver();
            $upinside->ver();
            
        ?>
    </body>
</html>
