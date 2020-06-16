<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - helpers :: Gestão de resultados</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');
            
            $Atual = filter_input(INPUT_GET, 'atual', FILTER_VALIDATE_INT);
            $Pager = new Pager('?atual=', 'Primeira', 'Última');
            $Pager->ExePager($Atual, 1);
     
            $read = new Read;
            $read->ExeRead('ws_categories', 'LIMIT :limit OFFSET :offset', "limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");
            
            if(!$read->getRowCount()):
                $Pager->ReturnPage();
                echo "Não existem resultados!<hr>";
                else:
                    var_dump($read->getResult());
            endif;
            
            //var_dump($Pager, $read->getResult());
            ?>
        </pre>
    </body>
</html>
