<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - MVC :: Conceito Prático de Utilização</title>
    </head>
    <body>
        <?php
        //CONTROLLER
        require ('./_app/config.inc.php');

        //MODEL
        $read = new Read;
        $read->ExeRead('ws_categories');

        foreach ($read->getResult() as $cat):
            extract($cat);

            //VIEW
            echo "<article> "
            . "<header><h1>{$category_title}</h1></header>"
            . "<p>{$category_content}</p>"
            . "</article><hr>";
            //END VIEW
            
        endforeach;
        //END MODEL
        
        //END CONTROLLER
        ?>
    </body>
</html>
