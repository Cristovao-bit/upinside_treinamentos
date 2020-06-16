<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Modelo de Associação</title>
    </head>
    <body>
        <?php
            
            require ('./inc/config.inc.php');
            
            $cristovao = new AssociacaoCliente("Cristovão L. Braga", 'contato@manutencaolira.com.br');
            
//            $cristovao = new stdClass();
//            $cristovao->Nome = 'Cristovão L. Braga';
//            $cristovao->Email = 'contato@manutencaolira.com.br';
            
            $login = new AssociacaoLogin($cristovao);
            
            if($login->getLogin()):
                echo "Gerenciando o cliente id: {$login->getCliente()->getCliente()}<br>";
                echo "{$login->getCliente()->getNome()} logou com sucesso usando o email {$login->getCliente()->getEmail()}<hr>";
            else:
                echo 'Erro ao Logar!';
            endif;
            
            var_dump($cristovao, $login);
            
        ?>
    </body>
</html>
