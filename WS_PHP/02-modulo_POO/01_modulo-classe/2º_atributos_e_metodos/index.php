<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Atributos e Metodos - PHP</title>
    </head>
    <body>
        <?php
        
            require ('./class/AtributosMetodos.class.php');
            
            $pessoa = new AtributosMetodos();
            $pessoa->setUsuario('Cristovão L. Braga', 25, 'Web Master');                    
            $Usuario = $pessoa->getUsuario();
            echo $Usuario;
            
            echo "<hr>";
            
            $pessoa->setUsuario('Marcelo', 27, 'Web Master');
            $pessoa->setIdade(35);
            $pessoa->Envelhecer();
            
            $pessoa->getClass();
        
        ?>
    </body>
</html>
