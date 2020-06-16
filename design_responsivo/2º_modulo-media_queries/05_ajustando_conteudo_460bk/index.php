<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="mit" content="2017-05-17T10:29:20-03:00+48876">
        <title>WS - RWD: Layout Fluído</title>

        <link rel="stylesheet" href="css/style.css"/>
        <link rel="shortcut icon" href="img/favicon.png"/>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'/>
        
        <script src="js/jquery.js"></script>
        <script>
            $(function(){
                $('.mobmenu').click(function(){
                    $('.main_header_menu .content').slideToggle();
                    $(this).toggleClass('active');
                    return false;
                });
            });
        </script>

    </head>
    <body>
        <header class="main_header container">            
            <div class="content logosearch">
                <h1 class="main_header_logo">WS - Design Design Responsivo</h1>

                <form class="main_header_search" name="search" action="" method="post">
                    <input class="s" type="search" placeholder="Pesquisar Conteúdo:"/>
                    <input class="b" type="submit" value="Ir"/>
                </form>
                <div class="clear"></div>
            </div>

            <div class="main_header_menu">
                <a title="Mobile Nav" class="mobmenu" href="#!">MENU</a>
                <div class="content">
                    <ul>
                        <li><a href="index.php" title="Home">Home</a></li>
                        <li><a href="index.php" title="Artigos">Artigos</a></li>
                        <li><a href="index.php" title="Categorias">Categorias</a></li>
                        <li><a href="index.php" title="Sobre o RWD">Sobre o RWD</a></li>
                        <li><a href="index.php" title="Fale Conosco">Contato</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </header>        

        <main class="main_content container">
            <div class="content">
                <section class="lastnews">
                    <header class="title-section">
                        <h1>Confira Nossas Atualizações:</h1>
                    </header>

                    <article class="lastnews_destaque">
                        <header>
                            <div class="capaaqui"></div>
                            <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                            <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                        </header>

                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                        <a href="#" title="Leia mais sobre [TITULO]">Leia Mais</a>

                    </article>

                    <?php
                    for ($i = 1; $i <= 4; $i++):
                        ?>
                        <article class="lastnews_article">
                            <header>
                                <div class="capaaqui"></div>
                                <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                                <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                            </header>

                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                            <a href="#" title="Leia mais sobre [TITULO]">Leia Mais</a>

                        </article>
                    <?php endfor; ?>
                </section>

                <aside class="sidebar">
                    <header class="title-section">
                        <h1>Artigos Mais Vistos:</h1>
                    </header>

                    <?php for ($b = 1; $b <= 4; $b++): ?>
                        <article class="sidebar_widget">
                            <header>
                                <div class="capaaqui"></div>
                                <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                                <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                            </header>
                        </article>
                    <?php endfor; ?>
                </aside>

                <div class="clear"></div>
            </div>
        </main>

        <footer class="main_footer container">
            &copy; 2010 - <?= date('Y'); ?> UpInside Treinamentos - Todos Os Direitos Reservados
        </footer>
    </body>
</html>
