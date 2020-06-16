<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Lançando Exessões</title>
    </head>
    <body>
        <?php
        $eu = null;

        if (!$eu):
            $a = new Exception("Eu é null", E_USER_NOTICE);
        endif;

        echo $a->getMessage();
        echo "<hr>";
        echo $a->getFile();
        echo "<hr>";

        var_dump($a);
        echo "<hr>";

        try {
            if (!$eu):
                throw new Exception("Eu novamente é null", E_USER_NOTICE);
            endif;
        } catch (Exception $e) {
            echo "<p>Erro #{$e->getCode()}: {$e->getMessage()}";
            echo "<small>{$e->getFile()} na linha {$e->getLine()}</small></p>";
            
//            echo "<hr>";
//            echo $e->xdebug_message;
        }
        ?>

    </body>
</html>
