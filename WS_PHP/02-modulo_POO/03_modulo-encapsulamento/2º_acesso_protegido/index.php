<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Acesso Protegido</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            $maria = new AcessoProtegido('Mª Betânia', 'mariabetania@gmail.com');
            $maria->Nome = 'Mª Cecília';
            //$maria->Email = 'mariacecilia@gmail.com';
            
            //com o acesso protegido agora terá a responsábilidade pelo atributo e pelo seu formato.
            $maria->setEmail('mariacecilia@gmail.com');
            //$maria->setNome('Pablo Vitar');
            
            var_dump($maria);
            
            echo "<hr>";
            
            $pablo = new AcessoProtegidoFilha('Pablo', 'pablo@gmail.com');
            //$pablo->setNome();
            
            $pablo->AddCpf('Pablo Vitar', '09634591595');
            
            var_dump($pablo);
            
        ?>
    </body>
</html>
