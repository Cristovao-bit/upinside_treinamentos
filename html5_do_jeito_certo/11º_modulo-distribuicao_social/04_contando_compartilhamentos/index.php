<?php
require './_app/Config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta name="mit" content="2017-05-25T15:06:50-03:00+48876">
        <title><?= $pg_title; ?></title>
        <meta name="description" content="<?= $pg_desc; ?>"/>
        <meta name="robots" content="index, follow"/>

        <link rel="author" href="https://plus.google.com/<?= $pg_google_author; ?>/posts"/>
        <link rel="publisher" href="https://plus.google.com/<?= $pg_google_publisher; ?>"/>
        <link rel="canonical" href="<?= $pg_url; ?>"/>
        <link rel="base" href="<?= HOME; ?>"/>

        <meta itemprop="name" content="<?= $pg_title; ?>"/>
        <meta itemprop="description" content="<?= $pg_desc; ?>"/>
        <meta itemprop="image" content="<?= $pg_image; ?>"/>
        <meta itemprop="url" content="<?= $pg_url; ?>"/>

        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?= $pg_title; ?>" />
        <meta property="og:description" content="<?= $pg_desc; ?>" />
        <meta property="og:image" content="<?= $pg_image; ?>" />
        <meta property="og:url" content="<?= $pg_url; ?>" />
        <meta property="og:site_name" content="<?= $pg_site; ?>" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:app_id" content="<?= $pg_fb_app; ?>" />
        <meta property="article:author" content="https://www.facebook.com/<?= $pg_fb_author; ?>" />
        <meta property="article:publisher" content="https://www.facebook.com/<?= $pg_fb_page; ?>" />

        <meta property="twitter:card" content="summary_large_image" />
        <meta property="twitter:site" content="<?= $pg_twitter; ?>" />
        <meta property="twitter:domain" content="<?= $pg_domain; ?>" />
        <meta property="twitter:title" content="<?= $pg_title; ?>" />
        <meta property="twitter:description" content="<?= $pg_desc; ?>" />
        <meta property="twitter:image:src" content="<?= $pg_image; ?>" />
        <meta property="twitter:url" content="<?= $pg_url; ?>" />        

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->   

        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>        
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/boot.css"/>
        <link rel="stylesheet" href="<?= INCLUDE_PATH; ?>/css/style.css"/>

        <link rel="shortcut icon" href="<?= INCLUDE_PATH; ?>/img/favicon.png"/>
        
        <script src="<?= HOME; ?>/_cdn/jquery.js"></script>
        <script src="<?= HOME; ?>/_cdn/sharebox.js"></script>
    </head>
    <body>        
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

        <!--CONTEUDO-->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!--CONTEUDO-->

        <!--content visual-->
        <div class="container">
            <div class="content content-page al-center fontsize2 font-light">
                UpInside Treinamentos. Os melhores e mais completos cursos de desenvolvimento WEB e TI do mercado!
                <div class="clear"></div>
            </div>
        </div>
        
        <?php
        $ShareClass = 'bg-graylight';
        require REQUIRE_PATH . '/inc/ShareBox.inc.php';
        ?>

        <footer class="container bg-light">
            <section class="main_footer content">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>

                <nav class="box box-medium">
                    <h1 class="title font-bold">Mais sobre o WS HTML5:</h1>
                    <ul>
                        <li><a class="shorticon shorticon-section" title="Assita o vídeo de apresentação com Robson V. Leite" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a class="shorticon shorticon-section" title="Veja as tecnologias que você vai aprender!" href="#tecnologias">Você vai Aprender</a></li>
                        <li><a class="shorticon shorticon-section" title="Mais informações na ficha técnica do curso!" href="#fichatecnica">Ficha Técnica</a></li>
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

                    <p class="shorticon shorticon-config"><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upisnide.com.br">www.upinside.com.br</a></p>
                    <p class="shorticon shorticon-mail"><b>E-mail:</b> <a title="Envie um e-mail" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p class="plast">&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos Os Direitos Reservados!</p>
                </article>

                <div class="clear"></div>
            </section>            
        </footer>
    </body>
</html>