<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Stored Procedures</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');
            $Conn = new Conn;
            
            try{
                $Query = "SELECT * FROM ws_siteviews_agent WHERE agent_name = :name";
                $Exe = $Conn->getConn()->prepare($Query);
                
                $Exe->bindValue(':name', 'Chrome');
                $Exe->execute();
                
                $Chrome = $Exe->fetchAll(PDO::FETCH_ASSOC); 
                
                $Exe->bindValue(':name', 'Safari');
                $Exe->execute();
                
                $Safari = $Exe->fetchAll(PDO::FETCH_ASSOC);
                
            } catch (PDOException $e){
                PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            }
            
            if($Chrome):
                var_dump($Chrome);
                echo "</br>";
                echo "{$Chrome[0]['agent_name']} tem {$Chrome[0]['agent_views']} visita(s)<hr>";
            endif;
            
            if($Safari):
                var_dump($Safari);
                echo "</br>";
                echo "{$Safari[0]['agent_name']} tem {$Safari[0]['agent_views']} visita(s)<hr>";
            endif;
            ?>
        </pre>
    </body>
</html>
