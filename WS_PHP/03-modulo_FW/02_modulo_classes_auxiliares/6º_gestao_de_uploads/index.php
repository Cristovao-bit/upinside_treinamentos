<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - helpers :: Gestão de uploads</title>
        <link rel="stylesheet" href="css/reset.css"/>
    </head>
    <body>
        <pre>
            <?php
            require ('./_app/config.inc.php');
            
            $form = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if($form && $form['sendImage']):
                
                $upload = new Upload('uploads/');
                $imagem = $_FILES['imagem'];
                //var_dump($imagem);
                
                $upload->Image($imagem);
                var_dump($upload);
                
            endif;
            ?>

            <form name="fileForm" action="" method="post" enctype="multipart/form-data">
                <label>
                    <input type="file" name="imagem"/> 
                </label>
                
                <input type="submit" name="sendImage" value="enviar arquivo!"/>
            </form>
        </pre>
    </body>
</html>
