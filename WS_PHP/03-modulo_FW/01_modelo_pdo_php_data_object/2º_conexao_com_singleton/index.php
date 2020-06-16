<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Conexão com Singleton</title>
    </head>
    <body>
        <?php
        require ('./_app/config.inc.php');
        $Conn = new Conn;
        $Conn->getConn();
        
        var_dump($Conn->getConn());
        ?>
    </body>
</html>
