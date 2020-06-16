<?php
require './_app/config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <title><?= $pg_title; ?></title>
        
        <!--Está meta serve para os mecanismo de busca, temos: index=coloque no indíce, noindex=não coloque no indíce, follow=siga o conteúdo e nofollow=não siga o conteúdo-->
        <meta name="robots" content="index, follow"/>
        
        <link rel="canonical" href="<?= $pg_url; ?>"/>
        
        <!--[if lt IE 9]>
               <script src="js/html5shiv.js"></script>
        <![endif]-->
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">        
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>
        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png"/>
        
    </head>
    <body>
        <!--Sermpre utilizar traço quando for class do boot e anderline quando for pra style, assim fica mais fácil de indetificar!-->
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo fl-left fontzero">
                    <a title="Home" href="<?= HOME; ?>" class="radius">
                        <?= $pg_title; ?>
                    </a>
                </h1>

                <ul class="main_nav fl-right">
                    <?php require REQUIRE_PATH . '/inc/main_nav.php'; ?>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        
        <!--CONTEÚDO-->
        <?php        
             $Url[1] = (empty($Url[1]) ? null : $Url[1]);
             
             if(file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
                 require REQUIRE_PATH . '/' . $Url[0] . '.php';
             elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
                 require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
             else:
                 require REQUIRE_PATH . '/404.php';
             endif;                          
        ?>            
        <!--CONTEÚDO-->
        
        <footer class="container bg-light">
            <section class="content main_footer">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>
                
                <nav class="box box-medium">
                    <h1 class="title font-bold">Mais sobre o  WS HTML5:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-section" title="Assista o Vídeo de Apresentação" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a class="shorticon shorticon-section" title="Apresentação" href="#apresentacao">Você vai Aprender</a></li>
                        <li><a class="shorticon shorticon-section" title="Assista o Vídeo de Apresentação" href="#apresentacao">Ficha Técnica</a></li>
                    </ul>
                </nav>
                
                <article class="box box-medium">
                    <h1 class="title font-bold">UpInside nas redes sociais:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-facebook" target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="http://www.facebook.com/upinside">Facebook</a></li>
                        <li><a class="shorticon shorticon-google" target="_blank" rel="nofollow" title="UpInside Treinamentos no Google Plus" href="http://plus.google.com/+upinside">Google+</a></li>
                        <li><a class="shorticon shorticon-twitter" target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="http://www.twitter.com/UpInsideBr">Twitter</a></li>
                    </ul>
                </article>
                
                <article class="main_ead box box-medium last">
                    <h1 class="fontzero">Plataforma UpInside</h1>
                    
                    <p class="shorticon shorticon-config"><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upinside.com.br/">www.upinside.com.br</a></p>
                    <p class="shorticon shorticon-mail"><b>E-mail:</b> <a title="Envie um email" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p class="plast">&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos os Direitos Reservados!</p>                    
                </article>
                
                <div class="clear"></div>
            </section>
        </footer>        
    </body>
</html>
