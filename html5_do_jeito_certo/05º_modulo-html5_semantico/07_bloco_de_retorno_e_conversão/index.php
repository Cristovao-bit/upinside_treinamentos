<!DOCTYPE html>
<?php
define('BASE', 'http://localhost/exercicio_upinside_treinamentos/html5_do_jeito_certo/5%C2%BA_modulo_html5_semantico/07_bloco_de_retorno_e_convers%C3%A3o/');
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso Work Series -  HTML5 do Jeito Certo!</title>
        
        <!--[if lt IE 9]>
               <script src="js/html5shiv.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="css/oocss.css"/>
        
    </head>
    <body>
        
        <header class="container bg-gray">
            <div class="content">
                <h1 class="main_logo">
                    <a title="Home" href="<?= BASE; ?>">
                        Curso Work Series -  HTML5 do Jeito Certo!
                    </a>
                </h1>

                <ul class="main_nav">
                    <li><a title="HTML5 Semântico" href="<?= BASE; ?>/html5-semantico">Semântico</a></li>
                    <li><a title="Estilo Produtivo com OOCSS" href="<?= BASE; ?>/estilo-com-oocss">OOCSS</a></li>
                    <li><a title="Formulários com HTML5" href="<?= BASE; ?>/formularios-com-html5">Forms</a></li>
                    <li><a title="Áudio e Vídeo na Web" href="<?= BASE; ?>/audio-e-video">Midia</a></li>
                    <li><a title="Geolocation e HTML Storage" href="<?= BASE; ?>/geolocation-e-storage">API'S</a></li>
                    <li><a title="Distribuição com Micro Dados" href="<?= BASE; ?>/micro-dados">Micro Dados</a></li>
                    <li><a class="btn btn-green radius boxshadow" title="Comprar Curso" target="_blank" href="https://www.upinside.com.br/">Comprar Curso</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        
        <!--CONTEÚDO-->
        <!--Bloco de vídeo-->
        <article class="container">
            <div class="content">
                <header>
                    <hgroup>
                        <h1>Conheça o curso WS HTML5!</h1>
                        <h2>Veja o que o tutor do curso <mark>Robson V. Leite</mark> tem a dizer!</h2>
                    </hgroup>
                </header>
                
                <video src="midia/video.mp4" controls width="400"></video>
                
                <aside>
                    <h1>Pronto para <a title="Comprar Curso WS HTML5 Agora!" target="_blank" href="https://www.upinside.com.br/cursos/html5-do-jeito-certo">Comprar o WS HTML5</a> e Aprender de Verdade?</h1>
                </aside>                
                <div class="clear"></div>
            </div>
            
            <footer class="bg-gray">
                <section class="content">
                    <h1>Veja Algumas Aulas do Curso WS HTML5!</h1>
                   
                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="" alt="" src=""/>
                        </div>
                        <h1>Entenda o HTML5</h1>
                    </article>
                   
                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="" alt="" src=""/>
                        </div>
                        <h1>HTML5 Semântico</h1>
                    </article>
                    
                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="" alt="" src=""/>
                        </div>
                        <h1>Style com OOCSS</h1>
                    </article>
                    
                    <article>
                        <div class="thumb">
                            <div class="video_play"></div>
                            <img title="" alt="" src=""/>
                        </div>
                        <h1>Geolocation e HTML5 Storage</h1>
                    </article>
                    
                    <div class="clear"></div>
                </section>
            </footer>
        </article>
        
        <!--seção relacional-->
        <section class="container">
            <!--Container do title-->
            <div class="content">
                <hgroup>
                    <h1>Conheça as tecnologias apresentadas:</h1>
                    <h2>O Curso WS HTML5 apresenta técnicas com foco em produção e otimização de conteúdo para internet!</h2>
                </hgroup>                
                
                <div class="clear"></div>
            </div>
            
            <!--Container dos artigos-->
            <div class="container bg-gray">
                <div class="content">
                    
                    <article>
                        <img title=" " alt="" src=""/>
                        <h1>HTML5 Semântico:</h1>
                        <p class="tagline">Aprenda a produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para rôbos de busca!</p>
                    </article>
                    
                    <article>
                        <img title=" " alt="" src=""/>
                        <h1>CSS produtivo com OOCSS:</h1>
                        <p class="tagline">Conheça as técnicas de produção do modelo OOCSS, construindo um ambiente padronizado e de ágil desenvolvimento!</p>
                    </article>
                    
                    <article>
                        <img title=" " alt="" src=""/>
                        <h1>Formulários com HTML5:</h1>
                        <p class="tagline">Conheça e aprenda a utilizar toda tecnologia dos novos elementos de formulários do HTML5!</p>
                    </article>
                    
                    <article>
                        <img title=" " alt="" src=""/>
                        <h1>Áudio e Vídeo na Web:</h1>
                        <p class="tagline">Nunca foi tão fácil incorporar e controlar mídias na internet. Aprenda a fazer isso de forma fácil!</p>
                    </article>
                    
                    <article>
                        <img title=" " alt="" src=""/>
                        <h1>Geolocation e HTML5 Storage:</h1>
                        <p class="tagline">Aprenda a utilizar a tecnologia de localização do HTML5. E ainda armazene dados de navegação apenas com HTML!</p>
                    </article>
                    
                    <article>
                        <img title=" " alt="" src=""/>
                        <h1>Distribuição com Micro Dados:</h1>
                        <p class="tagline">Aprenda a utilizar o vocabulário dos micro dados para distribuição de conteúdo otimizado de forma extrema!</p>
                    </article>                    
                    <div class="clear"></div>
                </div>
            </div>
        </section>
        
        <!--Seção Temático-->
        <section class="container">
            <div class="content">
                <div class="ses_title">
                    <h1>Ficha Técnica:</h1>
                    <p class="tagline">Saiba mais sobre o conteúdo do curso WS HTML5</p>
                </div>
                
                <article><h1>Tempo em Aula: <b>23h</b></h1></article>
                <article><h1>Certifica de: <b>230h</b></h1></article>
                <article><h1>Módulos: <b>8</b></h1></article>
                <article><h1>Vídeo Aulas: <b>50</b></h1></article>
                
                <div class="clear"></div>
            </div>
        </section>
        
        <!--Bloco de retorno e conversão-->
        <article class="container bg-gray">
            <div class="content">
                <header>
                    <hgroup>
                        <h1>Faça Parte da Turma WS HTML5, Matricule-se!</h1>
                        <h2>Comece Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>, <mark>Online</mark> e <mark>On Demand!</mark></h2>
                    </hgroup>
                </header>
                
                <a title="Quero Me Matricular no Curso WS HTML5 Agora!" target="_blank" href="https://www.upinside.com.br/cursos/html5-do-jeito-certo">Comprar WS HTML5!</a>
                
                <footer>
                    <div>
                        Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamente com o tutor, e todo material disponível para download!
                    </div>
                </footer>
                
                <div class="clear"></div>
            </div>
        </article>
        
        <!--Content visual-->
        <div class="container">
            <div class="content">
                UpInside Treinamentos. Os melhores e mais completo cursos de desenvolvimento Web e TI do mercado!
                <div class="clear"></div>
            </div>
        </div>
        
        <!--CONTEÚDO-->
        
        <footer class="container bg-light">
            <section class="content main_footer">
                <h1 class="fontzero">Sobre a UpInside Treinamentos</h1>
                
                <nav class="main_nav">
                    <h1 class="title">Mais sobre o  WS HTML5:</h1>
                    <ul>
                        <li><a title="Assista o Vídeo de Apresentação" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a title="Apresentação" href="#apresentacao">Assista o Vídeo</a></li>
                        <li><a title="Assista o Vídeo de Apresentação" href="#apresentacao">Assista o Vídeo</a></li>
                    </ul>
                </nav>
                
                <article class="main_social">
                    <h1 class="title">UpInside nas redes sociais:</h1>
                    <ul>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Facebook" href="http://www.facebook.com/upinside">Facebook</a></li>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Google Plus" href="http://plus.google.com/+upinside">Google+</a></li>
                        <li><a target="_blank" rel="nofollow" title="UpInside Treinamentos no Twitter" href="http://www.twitter.com/UpInsideBr">Twitter</a></li>
                    </ul>
                </article>
                
                <article class="main_copy">
                    <h1 class="fontzero">Plataforma UpInside</h1>
                    
                    <p><b>Plataforma EAD:</b> <a title="Plataforma EAD da UpInside" href="http://www.upinside.com.br/">www.upinside.com.br</a></p>
                    <p><b>E-mail:</b> <a title="Envie um email" href="mailto:cursos@upinside.com.br">cursos@upinside.com.br</a></p>
                    <hr>
                    <p>&copy; <?= date('Y'); ?> - UpInside Treinamentos, Todos os Direitos Reservados!</p>
                    
                </article>
                
                <div class="clear"></div>
            </section>
        </footer>
        
    </body>
</html>
