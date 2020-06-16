<!DOCTYPE html>
<?php
ob_start();
require ('./_app/config.inc.php');
$Session = new Session;
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="mit" content="2018-04-27T14:24:02-03:00+48876">

        <!--[if lt IE 9]>
            <script src="../../_cdn/html5.js"></script>
         <![endif]--> 
        
        <?php
            $Link = new Link;
            $Link->getTags();
        ?>

        <title>Cidade Online - Eventos, Promoções e Novidades!</title>

        <meta name="description" content="Descrição do site AQUI">
        <meta name="keywords" content="Frases Chave Aqui"> 
        <meta name="author" content="UPINSIDE TECNOLOGIA">
        <meta name="robots" content="index, follow">

        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/reset.css">
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css">
        <link rel="stylesheet" href="<?= HOME; ?>/_cdn/shadowbox/shadowbox.css">
        <link href='http://fonts.googleapis.com/css?family=Baumans' rel='stylesheet' type='text/css'>


    </head>
    <body>

        <?php
        require(REQUIRE_PATH . '/inc/header.inc.php');

        $url = ( isset($_GET['url']) ? strip_tags(trim($_GET['url'])) : 'index');
        $url = explode('/', $url);
        $url[0] = ($url[0] == null ? 'index' : $url[0]);
        $url[1] = ( empty($url[1]) ? null : $url[1]); //EVITA NOCICE
        
        //var_dump($url);

        if (file_exists(REQUIRE_PATH . '/' . $url[0] . '.php')) :
            require_once(REQUIRE_PATH . '/' . $url[0] . '.php');
        elseif (file_exists(REQUIRE_PATH . '/' . $url[0] . '/' . $url[1] . '.php')) :
            require_once(REQUIRE_PATH . '/' . $url[0] . '/' . $url[1] . '.php');
        else:
            if (file_exists(REQUIRE_PATH . '/404.php')):
                require_once(REQUIRE_PATH . '/404.php');
            else:
                echo "<p style=\"text-align:center; padding:50px 0;\">404 Erro - Arquivo não existe!</p>";
            endif;
        endif;

        require(REQUIRE_PATH . '/inc/footer.inc.php');
        ?>

    </body>

    <script src="<?= HOME; ?>/_cdn/jquery.js"></script>
    <script src="<?= HOME; ?>/_cdn/jcycle.js"></script>
    <script src="<?= HOME; ?>/_cdn/jmask.js"></script>
    <script src="<?= HOME; ?>/_cdn/shadowbox/shadowbox.js"></script>
    <script src="<?= HOME; ?>/_cdn/_plugins.conf.js"></script>
    <script src="<?= HOME; ?>/_cdn/_scripts.conf.js"></script>

</html>
<?php
ob_end_flush();