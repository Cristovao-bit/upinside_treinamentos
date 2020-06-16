<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
    </head>
    <body>
        <?php
        if (phpversion() >= 5.4):
            echo phpversion() .  ' Olá Mundo, podemos programar!';
        else:
            echo phpversion() .  ' Olá Mundo, preciso atualizar o PHP!';         
        endif;
        
        echo "<hr>";
        
        //echo phpinfo();
        
        //echo "<pre>";
        //print_r(ini_get_all());
        //echo "<pre>";
        
        echo ini_get('date.timezone') . "<br>";
        echo date('d/m/Y H:i:s') . "<hr>";
        
        date_default_timezone_set("UTC");
        echo date_default_timezone_get() . '<br>';
        echo date('d/m/Y H:i:s');
        ?>
    </body>
</html>
