<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Generic Crud :: Update</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');
            
            $Dados = ['agent_name' => 'Chrome', 'agent_views' => '120'];
            
            $update = new Update;
            $update->ExeUpdate('ws_siteviews_agent', $Dados, "WHERE agent_id = :id", 'id=5');
            
            if($update->getResult()):
                echo "{$update->getRowCount()} dado(s) atualizados com sucesso!<hr>";
            endif;
            
            $update->setPlaces('id=6');
            $update->setPlaces('id=7');
            $update->setPlaces('id=8');
            
            //var_dump($update);
            ?>
        </pre>
    </body>
</html>
