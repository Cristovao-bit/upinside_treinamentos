<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Prepared Statements</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');

            $PDO = new Conn;
            $name = "Firefox";
            $views = "128";

            try {
                $QRCreate = "INSERT INTO ws_siteviews_agent (agent_name, agent_views) VALUES (? , ?)";
                $Create = $PDO->getConn()->prepare($QRCreate);
                
                //Parametro BindValue
                //$Create->bindValue(1, 'IE', PDO::PARAM_STR);
                //$Create->bindValue(2, '8', PDO::PARAM_INT);
                
                //Parametro BindParam
                $Create->bindParam(1, $name, PDO::PARAM_STR, 15);
                $Create->bindParam(2, $views, PDO::PARAM_INT, 5);
                
                //$Create->execute();
                
                if($Create->rowCount()):
                    echo "{$PDO->getConn()->lastInsertId()} - Cadastro com sucesso!<hr>";
                else:
                    echo "Nada ainda!<hr>";
                endif;
                
                $QRSelect = "SELECT * FROM ws_siteviews_agent WHERE agent_views >= :visitas";
                $Select = $PDO->getConn()->prepare($QRSelect);
                
                $Select->bindValue(':visitas', '7');
                
                $Select->execute();
                
                if($Select->rowCount() >= 1):
                    echo "Pesquisa retornou {$Select->rowCount()} resultado(s)<hr>";
                    $resultado = $Select->fetchAll(PDO::FETCH_ASSOC);
                    var_dump($resultado);
                else:
                    echo "Nada ainda<hr>";
                endif;
            } catch (PDOException $e) {
                PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
                die;
            }
            ?>
        </pre>
    </body>
</html>
