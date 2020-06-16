<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Replica e Clonagem - PHP</title>
    </head>
    <body>
        <?php
            
            require ('./class/ReplicaClonagem.class.php');
            
            $readA = new ReplicaClonagem("posts", "categorias = 'noticias'", "ODER BY data DESC");
            $readA->Ler();
            $readA->setTermos("categorias = 'internet'");
            $readA->Ler();
            
            $readB = clone($readA);
            $readB->setTermos("categorias = 'redes sociais'");
            $readB->Ler();
            
            $readC = clone($readA);
            $readC->setTabela("comentários");
            $readC->setTermos("posts = 25");
            $readC->Ler();
            
            $readA->ver();
            $readB->ver();
            $readC->ver();
            
        ?>
    </body>
</html>
