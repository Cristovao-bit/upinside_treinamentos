<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - helpers :: Limites, categorias e outros</title>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');

            //$check = new Check;
            //var_dump($check);

            $Email = 'suporte@manutencaolira.com';

            if (Check::Email($Email)):
                echo "Válido!<hr>";
            else:
                echo "Inválido!<hr>";
            endif;

            $Name = 'Estamos aprendendo PHP. Veja você como é!';
            echo Check::Name($Name) . '<hr>';

            $Data = '31/10/2018 16:56:20';
            $Data = '31/10/2018';
            echo Check::Date($Data) . '<hr>';

            $String = "Olá mundo, estamos estudando PHP na UpInside!";
            echo Check::Words($String, 5, '<samll>Continue lendo...</small><hr>');
            
            echo Check::CatByName('artigos') . '<hr>';
            echo Check::CatByName('esportes') . '<hr>';
            //echo Check::CatByName('internet') . '<hr>';
            
            echo Check::UserOnline() . '<hr>';
            
            //echo Check::Image('google.jpg', 'Google');
            echo Check::Image('google.jpg', 'Google', 300, 180);
            ?>
        </pre>
    </body>
</html>
