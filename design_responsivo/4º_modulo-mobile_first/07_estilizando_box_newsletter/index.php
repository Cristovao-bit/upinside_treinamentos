<?php
define('HOME', 'project_index');
$pg_title = 'Curso Design Responsivo | UpInside Treinamentos';
?>
<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta name="mit" content="2017-05-25T17:13:45-03:00+48876">
        <meta name="viewport" content="width=device-width,initial-scale=1">
		
        <title><?= $pg_title; ?></title>
        <meta name="description" content="Neste curso você vai aprender as melhores práticas em Design Responsivo, e como aplicá-las."/>
        <meta name="robots" content="index, follow"/>

        <link rel="author" href="https://plus.google.com/103958419096641225872/posts"/>
        <link rel="publisher" href="https://plus.google.com/107305124528362639842"/>
        <link rel="canonical" href="<?= HOME; ?>"/>

        <meta itemprop="name" content="<?= $pg_title; ?>"/>
        <meta itemprop="description" content="Neste curso você vai aprender as melhores práticas em Design Responsivo, e como aplicá-las."/>
        <meta itemprop="image" content="img/index.jpg"/>
        <meta itemprop="url" content="<?= HOME; ?>"/> 

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->   

        <link rel="shortcut icon" href="img/favicon.png"/>
        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>   
        <link rel="stylesheet" href="_cdn/shadowbox/shadowbox.css"/>
        <link rel="stylesheet" href="css/boot.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <header class="main_header container">
            <div class="content">
                <div class="main_header_logo">
                    <h1><?= $pg_title; ?></h1>
                    <a href="<?= HOME; ?>" title="<?= $pg_title; ?>">
                        <img src="img/logo.png" alt="[<?= $pg_title; ?>]" title="<?= $pg_title; ?>"/>
                    </a>
                </div>

                <div class="mobile_action"></div>

                <ul class="main_header_nav">
                    <li class="main_header_nav_search">
                        <form name="search" action="" method="post">
                            <input class="s" type="search" placeholder="Pesquisar:" name="s">
                            <input class="b" type="submit" value=""/>
                        </form>
                    </li>

                    <li class="main_header_nav_item"><a href="<?= HOME; ?>" title="Home | <?= $pg_title; ?>">Home</a></li>
                    <li class="main_header_nav_item"><a href="<?= HOME; ?>" title="Novidades | <?= $pg_title; ?>">Novidades</a></li>
                    <li class="main_header_nav_item"><a href="<?= HOME; ?>" title="Mais Vistos | <?= $pg_title; ?>">Mais Vistos</a></li>
                    <li class="main_header_nav_item"><a href="<?= HOME; ?>" title="Categorias | <?= $pg_title; ?>">Categorias</a>
                        <!-- SUBMENU -->
                        <ul class="main_header_nav_sub">
                            <li class="main_header_nav_sub_item"><a href="<?= HOME; ?>" title="Categoria 1">Categoria 1</a>
                            <li class="main_header_nav_sub_item"><a href="<?= HOME; ?>" title="Categoria 2">Categoria 2</a>
                            <li class="main_header_nav_sub_item"><a href="<?= HOME; ?>" title="Categoria 3">Categoria 3</a>
                            <li class="main_header_nav_sub_item"><a href="<?= HOME; ?>" title="Categoria 4">Categoria 4</a>
                            <li class="main_header_nav_sub_item"><a href="<?= HOME; ?>" title="Categoria 5">Categoria 5</a>
                        </ul>
                    </li>
                    <li class="main_header_nav_item"><a href="<?= HOME; ?>" title="Contato | <?= $pg_title; ?>">Contato</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>

        <main class="main_content container">
            <section class="slide container">
                <h1 class="fontzero">Ultimas do Site:</h1>

                <div class="slide_controll">
                    <div class="slide_nav back"><</div>
                    <div class="slide_nav go">></div>
                </div>

                <article class="slide_item first">
                    <a href="#ver" title="Para Fortaleza">
                        <picture alt="Para Fortaleza">      
                            <source media="(min-width: 1600px)" srcset="tim.php?src=uploads/01.jpg&w=2000&h=600"/>
                            <source media="(min-width: 1366px)" srcset="tim.php?src=uploads/01.jpg&w=1600&h=600"/>
                            <source media="(min-width: 1280px)" srcset="tim.php?src=uploads/01.jpg&w=1366&h=400"/>
                            <source media="(min-width: 960px)" srcset="tim.php?src=uploads/01.jpg&w=1280&h=600"/>
                            <source media="(min-width: 768px)" srcset="tim.php?src=uploads/01.jpg&w=960&h=260"/>
                            <source media="(min-width: 480px)" srcset="tim.php?src=uploads/01.jpg&w=800&h=300"/>
                            <source media="(min-width: 1px)" srcset="tim.php?src=uploads/01.jpg&w=480&h=380"/>                   
                            <img src="uploads/01.jpg" alt="Para Fortaleza" title="Para Fortaleza"/>
                        </picture>
                    </a>
                    <div class="slide_item_desc">
                        <h1><a href="#ver" title="Para Fortaleza">Que tal uma linda viajem por fortaleza para curtir e recordar? conheça o melhor daqui!</a></h1>
                        <p class="tagline">diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </article>

                <article class="slide_item">
                    <a href="#ver" title="Para Punta Cana">
                        <picture alt="Para Punta Cana"> 
                            <source media="(min-width: 1600px)" srcset="tim.php?src=uploads/02.jpg&w=2000&h=600"/>
                            <source media="(min-width: 1366px)" srcset="tim.php?src=uploads/02.jpg&w=1600&h=600"/>
                            <source media="(min-width: 1280px)" srcset="tim.php?src=uploads/02.jpg&w=1366&h=400"/>
                            <source media="(min-width: 960px)" srcset="tim.php?src=uploads/02.jpg&w=1280&h=600"/>
                            <source media="(min-width: 768px)" srcset="tim.php?src=uploads/02.jpg&w=960&h=260"/>
                            <source media="(min-width: 480px)" srcset="tim.php?src=uploads/02.jpg&w=800&h=300"/>
                            <source media="(min-width: 1px)" srcset="tim.php?src=uploads/02.jpg&w=480&h=380"/>                  
                            <img src="uploads/02.jpg" alt="[Punta Cana]" title="Punta Cana"/>
                        </picture>                        
                    </a>
                    <div class="slide_item_desc">
                        <h1><a href="#ver" title="Para Punta Cana">Quer descansar e curtir? Um lindo hotel em punta cana é uma ótima opção para você!</a></h1>
                        <p class="tagline">diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </article>

                <article class="slide_item">
                    <a href="#ver" title="Para Veneza">
                        <picture alt="Para Veneza">         
                            <source media="(min-width: 1600px)" srcset="tim.php?src=uploads/03.jpg&w=2000&h=600"/>
                            <source media="(min-width: 1366px)" srcset="tim.php?src=uploads/03.jpg&w=1600&h=600"/>
                            <source media="(min-width: 1280px)" srcset="tim.php?src=uploads/03.jpg&w=1366&h=400"/>
                            <source media="(min-width: 960px)" srcset="tim.php?src=uploads/03.jpg&w=1280&h=600"/>
                            <source media="(min-width: 768px)" srcset="tim.php?src=uploads/03.jpg&w=960&h=260"/>
                            <source media="(min-width: 480px)" srcset="tim.php?src=uploads/03.jpg&w=800&h=300"/>
                            <source media="(min-width: 1px)" srcset="tim.php?src=uploads/03.jpg&w=480&h=380"/>                   
                            <img src="uploads/03.jpg" alt="[Veneza]" title="Veneza"/>
                        </picture>                        
                    </a>
                    <div class="slide_item_desc">
                        <h1><a href="#ver" title="Para Veneza">Um destino mais romântico para curtir a 2? Nada melhor que a linda veneza!</a></h1>
                        <p class="tagline">diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </article>
            </section> <!-- FECHA SLIDE -->

            <section class="more_news container">
                <div class="content">
                    <h1 class="section_title">Destinos Mais Escolhidos:</h1>

                    <article class="more_news_item">
                        <a href="#ver" title="Para Punta Cana">
                            <img src="tim.php?src=uploads/04.jpg&w=480&h=280" alt="[Punta Cana]" title="Punta Cana"/>
                        </a>
                        <div class="more_news_item_desc">
                            <h1><a href="#ver" title="Para Punta Cana">Punta Cana, simplesmente um destino espetacular para suas férias. É para curtir a 2 ou com a galera!</a></h1>
                            <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        </div>
                    </article>

                    <article class="more_news_item">
                        <a href="#ver" title="Bora Bora">
                            <img src="tim.php?src=uploads/05.jpg&w=480&h=280" alt="[Bora Bora]" title="Bora Bora"/>
                        </a>
                        <div class="more_news_item_desc">
                            <h1><a href="#ver" title="Bora Bora">Bora Bora, O máximo do romantismo, um destino ideal para casais apaixonados ou em lua de mel!</a></h1>
                            <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        </div>
                    </article>

                    <article class="more_news_item">
                        <a href="#ver" title="Para Lonres">
                            <img src="tim.php?src=uploads/06.jpg&w=480&h=280" alt="[Lonres]" title="Lonres"/>
                        </a>
                        <div class="more_news_item_desc">
                            <h1><a href="#ver" title="Para Lonres">Pontos turísticos deslumbrantes. Baladas inigualáveis e toda magia de Londres. Curta em alto estilo!</a></h1>
                            <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        </div>
                    </article>

                    <article class="more_news_item">
                        <a href="#ver" title="Para Bonito">
                            <img src="tim.php?src=uploads/07.jpg&w=480&h=280" alt="[Bonito]" title="Bonito"/>
                        </a>
                        <div class="more_news_item_desc">
                            <h1><a href="#ver" title="Para Bonito">Pertinho de você. Bonito é um paraíso de grutas e aguas cristalinas. Venha mergulhar e curtir bonito!</a></h1>
                            <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        </div>
                    </article>
                    <div class="clear"></div>
                </div>
            </section> <!-- FECHA MAIS VISTOS -->

            <section class="bestviews container">
                <div class="content">
                    <h1 class="section_title">Melhores Destinos:</h1>
                    <article class="bestviews_item">
                        <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        <h1><a href="#ver" title="Para Punta Cana">Quer descansar e curtir? Um lindo hotel em punta cana é uma ótima opção para você!</a></h1>
                    </article>

                    <article class="bestviews_item">
                        <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        <h1><a href="#ver" title="Bora Bora">Bora Bora, O máximo do romantismo, um destino ideal para casais apaixonados ou em lua de mel!</a></h1>
                    </article>

                    <article class="bestviews_item">
                        <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        <h1><a href="#ver" title="Para Fortaleza">Que tal uma linda viajem por fortaleza para curtir e recordar? conheça o melhor daqui!</a></h1>
                    </article>

                    <article class="bestviews_item">
                        <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                        <h1><a href="#ver" title="Para Bonito">Pertinho de você. Bonito é um paraíso de grutas e aguas cristalinas. Venha mergulhar e curtir bonito!</a></h1>
                    </article>
                    <div class="clear"></div>
                </div>
            </section>

            <aside class="newsletter container">
                <div class="content">
                    <h1>Receba nossas novidades, ofertas e promoções!</h1>
                    <form>
                        <input type="email" placeholder="Informe seu E-mail:"/>
                        <input type="submit" value="Assinar"/>
                    </form>

                    <div class="newsletter_icon"></div>
                    <div class="clear"></div>
                </div>
            </aside>

            <div class="more_and_gallery">
                <section class="most_views container">
                    <div class="content">
                        <h1 class="section_title">Mais Vistos:</h1>

                        <article class="most_views_item">

                            <picture alt="Para Punta Cana">                    
                                <source media="(min-width: 960px)" srcset="tim.php?src=uploads/03.jpg&w=500&h=300"/>
                                <source media="(min-width: 1px)" srcset="tim.php?src=uploads/02.jpg&w=300&h=300"/>                   
                                <img src="uploads/02.jpg" alt="[Punta Cana]" title="Punta Cana"/>
                            </picture> 
                            <div class="most_views_item_desc">
                                <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                                <h1><a href="#ver" title="Para Punta Cana">Quer descansar e curtir? Um lindo hotel em punta cana é uma ótima opção para você!</a></h1>
                            </div>
                        </article>

                        <article class="most_views_item">
                            <picture alt="Para Bora Bora">                    
                                <source media="(min-width: 960px)" srcset="tim.php?src=uploads/05.jpg&w=500&h=300"/>
                                <source media="(min-width: 1px)" srcset="tim.php?src=uploads/05.jpg&w=300&h=300"/>                   
                                <img src="uploads/05.jpg" alt="[Bora Bora]" title="Bora Bora"/>
                            </picture> 
                            <div class="most_views_item_desc">
                                <time datetime="2015-01-26">26/01/2015 às 14:23hs</time>
                                <h1><a href="#ver" title="Bora Bora">Bora Bora, O máximo do romantismo, um destino ideal para casais apaixonados ou em lua de mel!</a></h1>
                            </div>
                        </article>
                        <div class="clear"></div>
                    </div>
                </section>

                <nav class="gallery container">
                    <h1 class="section_title">Galerias:</h1>
                    <?php
                    for ($i = 8; $i < 14; $i++):
                        $image = str_pad($i, 2, "0", STR_PAD_LEFT);
                        echo "<a href='uploads/{$image}.jpg' rel='shadowbox[gb]'><img src='tim.php?src=uploads/{$image}.jpg&w=240&h=120' alt='Galeria' title='Galeria'/></a>";
                    endfor;
                    ?>
                </nav>

            </div><!-- MORE AND GALLERY -->
        </main>

        <footer class="main_footer container">
            <div class="content">
                <ul class="main_footer_social">
                    <li class="main_footer_social_twitter"><a target="_blank" href="https://twitter.com/UpInsideBr" title="UpInside no Twitter"><img src="img/social_twitter.png" alt="UpInside No Twitter" title="UpInside No Twitter"/></a></li>
                    <li class="main_footer_social_twitter"><a target="_blank" href="https://plus.google.com/+upinside" title="UpInside no Google +"><img src="img/social_google.png" alt="UpInside no Google +" title="UpInside no Google +"/></a></li>
                    <li class="main_footer_social_twitter"><a target="_blank" href="https://www.facebook.com/upinside" title="UpInside no Facebook"><img src="img/social_facebook.png" alt="UpInside no Facebook" title="UpInside no Facebook"/></a></li>
                </ul>

                <div class="main_footer_copy">
                    Curso Work Series - Design Responsivo<br>
                    2015 - UpInside Treinamentos, todos os direitos reservados
                </div>

                <div class="clear"></div>
            </div>
        </footer>

        <script src="_cdn/jquery.js"></script>
        <script src="_cdn/shadowbox/shadowbox.js"></script>
    </body>
</html>