<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Este exercício está sendo realizado no curso de HTML5 da UpInside Treinamentos"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>UpInside Treinamentos - Marcando Rodapé</title>
        <!--
            FAVICON
            STYLE
            FONT
          -->
    </head>
    <body>
        <header>
            <img title="Curso de HTML5!" alt="[Curso de HTML5!]" src="img/_logo.png"/>
            <h1>Curso de HTML5 - UpInside Treinamentos</h1>
            
            <ul>
                <li><a href="#home" title="Curso de HTML5!">Home</a></li>
                <li><a href="#curso" title="Sobre o Curso de HTML5!">O Curso</a></li>
                <li><a target="_blank" href="http://www.upinside.com.br/oferta/html5-do-jeito-certo/" title="Curso Work Series - HTML5 do Jeito Certo!">Work Series</a></li>
                <li><a href="#videoaulas" title="Confira Vídeo Aulas do Curso de HTML5!">Vídeo Aulas</a></li>
                <li><a href="#contato" title="Contato sobre o Curso de HTML5!">Fale Conosco</a></li>
            </ul>
        </header>
        <!--FECHA CABEÇALHO-->
        
        <main>
            <article>
                <header>
                    <h1>Bem-Vindo(a) ao Curso Gratuito de HTML5</h1>
                    <p class="tagline">Você está pronto para aprender HTML5, CSS e jQuery de forma descomplicada, gratuita e do jeito certo? Confira o nosso curso  gratuito de HTML5!</p>
                </header>
            </article>
            <!--DESTAQUE DO SITE-->
            
            <section>
                <header>
                    <h1>Curso de HTML5</h1>
                    <p class="tagline">Confira o que você vai aprender no curso de HTML5</p>
                </header>
                
                <article>
                    <img title="Curso de HTML5 - HTML e HTML5" alt="[Curso de HTML5 - HTML e HTML5]" src="img/01.jpg"/>
                    <h1>HTML e HTML5!</h1>
                    <p>Aprenda a utilizar o HTML5 do Jeito Certo!Segmentando o seu site e destríbuindo o conteúdo de forma otimizadae e de ponta a ponta!</p>
                    <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                </article>
                
                <article>
                    <img title="Curso de HTML5 - CSS e CSS3!" alt="[Curso de HTML5 - CSS e CSS3!]" src="img/02.jpg"/>
                    <h1>CSS e CSS3!</h1>
                    <p>Trabalhe com produtividade e qualidade o seu CSS.Aplicando classes coesas e focando no que realmente importa. O Conteúdo do Site!</p>
                     <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                </article>
                
                <article>
                    <img title="Curso de HTML5 - jQuery!" alt="[Curso de HTML5 - jQuery!]" src="img/03.jpg"/>
                    <h1>jQUERY!</h1>
                    <p>Javascript? Claro! Contudo, aqui vamos trabalhar com jQuery. Entender a biblioteca e o seu uso padrão.Produtividade é essencial!</p>
                     <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                </article>
                
                <article>
                    <img title="Curso Work Series - HTML5 do Jeito Certo!" alt="[Curso Work Series - HTML5 do Jeito Certo!]" src="img/04.jpg"/>
                    <h1>WORK SERIES!</h1>
                    <p>Terminou o curso HTML5? Então é hora de se tornar um ninja com a linguagem e aprender técnicas avançadas de otimização!</p>
                     <span> <time datetime="<?= date('Y-m-d');?>"><?= date('d/m/Y \à\s H:i\h\s');?></time> em <b>Matérias</b></span>
                </article>
                
                <footer>
                    <img title="Confira o curso completo de HTML5 do Jeito Certo!" alt="[Confira o curso completo de HTML5 do Jeito Certo!]" src="img/05.png"/>
                    <h1>Curso HTML5 do Jeito Certo!</h1>
                    <p>Aprenda a utilizar Todo o Poder do HTML5 Semântico Somado as Avançadas Técnicas de SEO para Criar Sites Altamente Lucrativos e que Geram Resultados Rápidos e Eficientes!</p>
                   <a target="_blank" title="Conheça o curso de HTML5 do Jeito Certo!" href="http://www.upinside.com.br/">Conhecer agora</a>
                </footer>
            </section>
            <!--O CURSO!-->
            
            <section>
                <header>
                    <h1>Vídeo Aulas do Curso:</h1>
                    <p class="tagline">Confira algumas aulas do curso de HTML5</p>
                </header>
                
                <div>
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
                <aside>
                    <header>
                        <h1>Comentários:</h1>
                    </header>
                    
                    <article>
                        <img title="Comentário de Robson V. Leite" alt="[Comentário de Robson V. Leite]" src="img/foto.jpg"/>
                        <h1><span>Comentário de</span> Robson V. Leite</h1>
                        <p>O curso foi pensado para levar o aluno do zero ao ninja não somente HTML. Mas aplicando tecnicas avançadas de otimização!</p>
                    </article>
                    
                    <article>
                        <img title="Comentário de Marcos da Silva" alt="[Comentário de Marcos da Silva]" src="img/foto.jpg"/>
                        <h1><span>Comentário de</span> Marcos da Silva</h1>
                        <p>O curso foi pensado para levar o aluno do zero ao ninja não somente HTML. Mas aplicando tecnicas avançadas de otimização!</p>
                    </article>
                </aside>
            </section>
            <!--VÍDEO AULAS-->
            
            <article>
                <header>
                    <h1>Entre em Contato:</h1>
                    <p class="tagline">Este Formulário está aqui apenas para estudos dos curso de HTML5!</p>
                </header>

                <form action="" method="post">
                    <label>
                        <span>Nome:</span>
	<input type="text" name="nome" title="Informe Seu Nome!" placeholder="Informe Seu Nome" required/>
                    </label>

                    <label>
                        <span>E-mail:</span>
	<input type="email" name="email" title="Informe Seu E-mail!" placeholder="Informe Seu E-mail" required/>
                    </label>

                    <label>
                        <span>Mensagem:</span>
	<textarea rows="3" name="mensagem" title="Deixe Sua Mensagem" placeholder="Deixe Sua Mensagem" required></textarea>
                    </label>

                    <!--Formas de Botão de enviu-->
                    <!--<input type="submit" value="Enviar" name="send_form"/>-->

                    <img title="Agurade, Enviando Contato!" alt="[Agurade, Enviando Contato!]" src="img/ajax-loader.gif"/>
                    <!--<input type="reset" value="Limpar"/>-->
                    <button>Enviar Contato</button>
                  </form>
            </article>
            <!--CONTATO!-->
        </main>
        <!--FECHA CONTEÚDO-->
        
        <footer>
            <h1>Curso de HTML5</h1>
            <nav>
                <h1>UpInside Treinamentos</h1>
                <ul>
                    	<li><a target="_black" title="UpInside Treinamentos" href="//www.upinside.com.br/">UpInside</a></li>
	<li>|</li>
	<li><a target="_black" title="UpInside Treinamentos no Facebook" href="//www.facebook.com/upinside/">Facebook</a></li>
	<li>|</li>
	<li><a target="_black" title="UpInside Treinamentos no YouTube" href="//www.youtube.com/c/RobsonVLeite/">YouTube</a></li>
                </ul>
            </nav>
        </footer>
        <!--FECHA RODAPÉ-->
    </body>
</html>
