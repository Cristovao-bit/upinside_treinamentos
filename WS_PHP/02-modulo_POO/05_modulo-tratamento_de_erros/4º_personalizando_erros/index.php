<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Personalizando Erros</title>
        <link rel="stylesheet" href="css/reset.css"/>
    </head>
    <body>
        <?php
        require ('./_app/config.inc.php');

        trigger_error("Essa é uma NOTICE!", E_USER_NOTICE);
        trigger_error("Esse é um ALERT!", E_USER_WARNING);
        //trigger_error("Esse e um ERROR!", E_USER_ERROR);

        PHPErro(WS_ERROR, "Esse é um erro personalizado!", __FILE__, __LINE__);
        WSErro("Esse é um ACCEPT!", WS_ACCEPT);

        try {
            
            throw new Exception("Essa é uma excessão!", E_USER_WARNING);
        
            
        } catch (Exception $e) {
            
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            WSErro($e->getMessage(), $e->getCode());
            WSErro($e->getMessage(), WS_ACCEPT);
            
        }
        ?>
    </body>
</html>
