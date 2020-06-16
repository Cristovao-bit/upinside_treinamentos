<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Este exercício está sendo realizado no curso de HTML5 da UpInside Treinamentos"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UpInside Treinamentos - Estilizando Destaque do Site</title>
        <link rel="shortcut icon" href="img/favicon.png"/>
        <link rel="stylesheet" href="css/style.css"/>
         <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    </head>
    <body>
        <!--foi inserido o href home do link aqui na header-->
        <header  class="main_header container home">
            <div class="content">
                <img class="main_logo" title="Curso de HTML5!" alt="[Curso de HTML5!]" src="img/_logo.png"/>
                <h1 class="fontzero">Curso de HTML5 - UpInside Treinamentos</h1>

                <ul class="main_menu">
                    <li><a href="#home" title="Curso de HTML5!">Home</a></li>
                    <li><a href="#curso" title="Sobre o Curso de HTML5!">O Curso</a></li>
                    <li><a class="special" target="_blank" href="http://www.upinside.com.br/oferta/html5-do-jeito-certo/" title="Curso Work Series - HTML5 do Jeito Certo!">Work Series</a></li>
                    <li><a href="#videoaulas" title="Confira Vídeo Aulas do Curso de HTML5!">Vídeo Aulas</a></li>
                    <li><a href="#contato" title="Contato sobre o Curso de HTML5!">Fale Conosco</a></li>
                </ul>
                <div class="clear"></div>
            </div>
        </header>
        <!--FECHA CABEÇALHO-->
        
        <main class="container">
            <div class="border_botton border_botton_destaque">
            <article class="destaque container">                
                <div class="content">
                    <header>
                        <h1>Bem-Vindo(a) ao Curso Gratuito de HTML5</h1>
                        <p class="tagline">Você está pronto para aprender HTML5, CSS e jQuery de forma descomplicada, gratuita e do jeito certo? Confira o nosso curso  gratuito de HTML5!</p>
                        <div class="fb-like" data-href="https://pt-br.facebook.com/upinside/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartilhar</a></div>
                    </header>
                    
                    <div class="destaque_video">
                        <div class="ratio">
                            <iframe class="media" src="https://www.youtube.com/embed/TYXE-legZMU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </article>
            </div>
            <!--DESTAQUE DO SITE-->
            
            <section class="container curso">
                <div class="content">
                    <header class="big_title">
                        <h1>Curso de HTML5</h1>
                        <p class="tagline">Confira o que você vai aprender no curso de HTML5</p>
                    </header>

                    <article class="curso_item">
                        <img title="Curso de HTML5 - HTML e HTML5" alt="[Curso de HTML5 - HTML e HTML5]" src="img/01.jpg"/>
                        <h1>HTML e HTML5!</h1>
                        <p>Aprenda a utilizar o HTML5 do Jeito Certo!Segmentando o seu site e destríbuindo o conteúdo de forma otimizadae e de ponta a ponta!</p>
                        <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                    </article>

                    <article class="curso_item">
                        <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                        <h1>CSS e CSS3!</h1>
                        <p>Trabalhe com produtividade e qualidade o seu CSS.Aplicando classes coesas e focando no que realmente importa. O Conteúdo do Site!</p>
                         <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                    </article>

                    <article class="curso_item">
                        <img title="Curso de HTML5 - jQuery!" alt="[Curso de HTML5 - jQuery!]" src="img/03.jpg"/>
                        <h1>jQUERY!</h1>
                        <p>Javascript? Claro! Contudo, aqui vamos trabalhar com jQuery. Entender a biblioteca e o seu uso padrão.Produtividade é essencial!</p>
                         <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                    </article>

                    <article class="curso_item">
                        <img title="Curso Work Series - HTML5 do Jeito Certo!" alt="[Curso Work Series - HTML5 do Jeito Certo!]" src="img/04.jpg"/>
                        <h1>WORK SERIES!</h1>
                        <p>Terminou o curso HTML5? Então é hora de se tornar um ninja com a linguagem e aprender técnicas avançadas de otimização!</p>
                         <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                    </article>
                    <div class="clear"></div>
                </div>

                <footer class="container curso_footer">
                    <div class="content">
                        <img title="Confira o curso completo de HTML5 do Jeito Certo!" alt="[Confira o curso completo de HTML5 do Jeito Certo!]" src="img/05.png"/>
                        <h1>Curso HTML5 do Jeito Certo!</h1>
                        <p>Aprenda a utilizar Todo o Poder do HTML5 Semântico Somado as Avançadas Técnicas de SEO para Criar Sites Altamente Lucrativos e que Geram Resultados Rápidos e Eficientes!</p>
                        <a class="btn" target="_blank" title="Conheça o curso de HTML5 do Jeito Certo!" href="http://www.upinside.com.br/">Conhecer agora</a>
                       <div class="clear"></div>
                    </div>    
                </footer>                    
            </section>
            <!--O CURSO!-->
            
            <section class="container videoaulas">
                <div class="content">
                    <header class="big_title">
                    <h1>Vídeo Aulas do Curso:</h1>
                    <p class="tagline">Confira algumas aulas do curso de HTML5</p>
                </header>
                
                    <div class="videoaulas_videos">
                    <article>
                        <img title="Curso de HTML5 - HTML e HTML5" alt="[Curso de HTML5 - HTML e HTML5]" src="img/01.jpg"/>
                        <h1>HTML e HTML5!</h1>
                        <p>Aprenda a utilizar o HTML5 do Jeito Certo!</p>
                    </article>
                    
                     <article>
                        <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                        <h1>CSS e CSS3!</h1>
                        <p>Trabalhe com produtividade e qualidade o seu CSS!</p>
                    </article>
                
                    <article>
                        <img title="Curso de HTML5 - jQuery!" alt="[Curso de HTML5 - jQuery!]" src="img/03.jpg"/>
                        <h1>jQUERY!</h1>
                        <p>Javascript? Claro! Contudo, aqui vamos trabalhar com jQuery!</p>
                    </article>
                   
                    <article>
                        <img title="Curso de HTML5 - HTML e HTML5" alt="[Curso de HTML5 - HTML e HTML5]" src="img/01.jpg"/>
                        <h1>HTML e HTML5!</h1>
                        <p>Aprenda a utilizar o HTML5 do Jeito Certo!</p>
                    </article>
                    
                     <article>
                        <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                        <h1>CSS e CSS3!</h1>
                        <p>Trabalhe com produtividade e qualidade o seu CSS!</p>
                    </article>
                
                    <article>
                        <img title="Curso de HTML5 - jQuery!" alt="[Curso de HTML5 - jQuery!]" src="img/03.jpg"/>
                        <h1>jQUERY!</h1>
                        <p>Javascript? Claro! Contudo, aqui vamos trabalhar com jQuery!</p>
                    </article>
                </div>
                
                <!--Onservação: Evitar colocar links que leve o usuario para fora de seu site, se for colocar potar no linl nofolow-->
                <aside class="videoaulas_sidebar">
                    <div class="border_botton">
                        <div class="content">
                            <header>
                                <h1 class="title">Comentários:</h1>
                            </header>

                            <article class="videoaulas_sidebar_comment">
                                <img title="Comentário de Robson V. Leite" alt="[Comentário de Robson V. Leite]" src="img/foto.jpg"/>
                                <h1><span class="fontzero">Comentário de</span> Robson V. Leite</h1>
                                <p>O curso foi pensado para levar o aluno do zero ao ninja não somente HTML!</p>
                            </article>

                            <article class="videoaulas_sidebar_comment">
                                <img title="Comentário de Marcos da Silva" alt="[Comentário de Marcos da Silva]" src="img/foto.jpg"/>
                                <h1><span class="fontzero">Comentário de</span> Marcos da Silva</h1>
                                <p>O curso foi pensado para levar o aluno do zero ao ninja não somente HTML!</p>
                            </article>                       
                            <div class="clear"></div>
                         </div>
                    </div>
                </aside>
                <div class="clear"></div>
                </div>
            </section>
            <!--VÍDEO AULAS-->
            
            <article class="container contato">
                <div class="content">
                <header>
                    <h1>Entre em Contato:</h1>
                    <p class="tagline">Este Formulário está aqui apenas para estudos dos curso de HTML5!</p>
                </header>

                    <form class="contato_form" action="" method="post">
                        <label class="medium">
                        <span>Nome:</span>
	<input type="text" name="nome" title="Informe Seu Nome!" placeholder="Informe Seu Nome" required/>
                    </label>

                    <label class="medium">
                        <span>E-mail:</span>
	<input type="email" name="email" title="Informe Seu E-mail!" placeholder="Informe Seu E-mail" required/>
                    </label>

                    <label>
                        <span>Mensagem:</span>
	<textarea rows="3" name="mensagem" title="Deixe Sua Mensagem" placeholder="Deixe Sua Mensagem" required></textarea>
                    </label>

                    <!--Formas de Botão de enviu-->
                    <!--<input type="submit" value="Enviar" name="send_form"/>-->

                    <img class="form_load" title="Agurade, Enviando Contato!" alt="[Agurade, Enviando Contato!]" src="img/ajax-loader.gif"/>
                    <!--<input type="reset" value="Limpar"/>-->
                    <button class="btn">Enviar Contato</button>
                  </form>
                    <div class="clear"></div>
                </div>
            </article>
            <!--CONTATO!-->
        </main>
        <!--FECHA CONTEÚDO-->
        
        <footer class="container main_footer">
            <div class="border_botton">
            <div class="ftcontent">
                <h1 class="title">Curso de HTML5</h1>
                <nav>
                    <h1 class="subtitle">UpInside Treinamentos</h1>
                    <ul class="main_footer_social">
                        <li><a target="_black" title="UpInside Treinamentos" href="//www.upinside.com.br/">UpInside</a></li>
                        <li>|</li>
                        <li><a target="_black" title="UpInside Treinamentos no Facebook" href="//www.facebook.com/upinside/">Facebook</a></li>
                        <li>|</li>
                        <li><a target="_black" title="UpInside Treinamentos no YouTube" href="//www.youtube.com/c/RobsonVLeite/">YouTube</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>           
            </div>
           </div>
        </footer>
        <!--FECHA RODAPÉ-->
        
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
        
        <!--Foi digitado no google facebook developers, depois produtos e depois plugins sociais do facebook, ao abrir lá em baixo tem documentação de plugins sociais e tem um botão curti, compartilhar e enviar. Link:https://developers.facebook.com/docs/plugins/like-button#-->
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
    </body>
</html>
