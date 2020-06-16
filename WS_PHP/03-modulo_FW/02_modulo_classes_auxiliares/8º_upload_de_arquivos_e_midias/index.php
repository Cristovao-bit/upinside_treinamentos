<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - helpers :: Upload de Arquivos e Mídias</title>
        <link rel="stylesheet" href="css/reset.css"/>
        <style>
            label{display: block; margin-bottom: 15px;}
            label span{display: block;}
        </style>
    </head>
    <body>
        <pre>
            <?php
            require('./_app/Config.inc.php');

            $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if ($form && $form['sendFile']):

                $file = $_FILES['arquivo'];
                if ($file['name']):
                    $upload = new Upload('uploads/');
                    $upload->File($file);

                    var_dump($upload);
                endif;
                
                $midia = $_FILES['midia'];
                if ($midia['name']):
                    $upload = new Upload('uploads/');
                    $upload->Media($midia);

                    var_dump($upload);
                endif;
            endif;
            ?>
        </pre>

        <form name="fileForm" action="" method="post" enctype="multipart/form-data">
            <label>
                <span>Arquivo:</span>
                <input type="file" name="arquivo"/>
            </label>

            <label>
                <span>Midia:</span>
                <input type="file" name="midia"/>
            </label>

            <input type="submit" name="sendFile" value="enviar arquivo!"/>
        </form>
    </body>
</html>

