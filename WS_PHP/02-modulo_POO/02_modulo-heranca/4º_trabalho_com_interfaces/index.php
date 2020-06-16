<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WS PHP - Trabalho com Interface</title>
    </head>
    <body>
        <?php
        require ('./interface/IAluno.php');
        require ('./class/TrabalhoComInterfaces.class.php');

        $aluno = new TrabalhoComInterfaces('Cristovão', 'Pro PHP');
        $aluno->Formar();
        $aluno->Matricular('WS PHP');
        $aluno->Formar();
        
        var_dump($aluno);
        ?>
    </body>
</html>
