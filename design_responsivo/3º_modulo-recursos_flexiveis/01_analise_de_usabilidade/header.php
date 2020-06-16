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
                        <li><a href="index.php" title="Fale Conosco">Contato</a></li>
                    </ul>
                    <div class="clear"></div>
                </div>
            </div>
        </header>        

        <main class="main_content container">