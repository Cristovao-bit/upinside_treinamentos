<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Generic Crud :: Delete</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');
            
            $delete = new Delete;
            $delete->ExeDelete('ws_siteviews_agent', "WHERE agent_id >= :id", 'id=1');
            
            if($delete->getResult()):
                echo "{$delete->getRowCount()} registro(s) removidos com sucesso!<hr>";
            endif;
            
            //var_dump($delete);
            ?>
        </pre>
    </body>
</html>
