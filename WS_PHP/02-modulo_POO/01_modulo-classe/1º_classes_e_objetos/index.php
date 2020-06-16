<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Classes e Objetos - PHP</title>
    </head>
    <body>
        <?php
        
         require './class/ClassesObjetos.class.php';
         
         $Teste = new ClassesObjetos();
         $Teste->getClass('de introdução', 'mostrar uma classe.');
         echo "<br>";
         $Teste->verClass();
         echo "<br>";
         
         $Teste->Classe = 'Classe 2';
         $Teste->Funcao = 'Ver os atributos';
         $Teste->verClass();
        ?>
    </body>
</html>
