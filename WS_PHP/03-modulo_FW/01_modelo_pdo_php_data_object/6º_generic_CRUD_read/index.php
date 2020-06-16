<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Generic Crud :: Read</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');

            $read = new Read;
            $read->ExeRead('ws_siteviews_agent', 'WHERE agent_name = :name AND agent_views >= :views LIMIT :limit', "name=Safari&views=10&limit=2");
            $read->setPlaces("name=Chrome&views=10&limit=2");
            $read->setPlaces("name=IE&views=5&limit=2");
            $read->setPlaces("name=Firefox&views=10&limit=2");
            
            if($read->getRowCount() >= 1):
                var_dump($read->getResult());
                echo "<hr>";
            endif;
            
            $read->FullRead("SELECT * FROM ws_siteviews_agent LIMIT :limit OFFSET :offset", "limit=2&offset=2");
            
            var_dump($read);
            ?>
        </pre>
    </body>
</html>
