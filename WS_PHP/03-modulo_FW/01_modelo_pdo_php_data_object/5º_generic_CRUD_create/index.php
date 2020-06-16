<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Generic Crud :: Create</title>
    </head>
    <body>
        <?php
        require ('./_app/config.inc.php');

        $Dados = ['agent_name' => 'Firefox', 'agent_views' => '1280'];

        $Cadastro = new Create;
        //$Cadastro->ExeCreate('ws_siteviews_agent', $Dados);
        
        $Dados = ['agent_name' => 'Safari', 'agent_views' => '680'];
        $Cadastro->ExeCreate('ws_siteviews_agent', $Dados);

        if($Cadastro->getResult()):
            echo "Cadastro com sucesso!<hr>";
        endif;
        
        var_dump($Cadastro);
        ?>
    </body>
</html>
