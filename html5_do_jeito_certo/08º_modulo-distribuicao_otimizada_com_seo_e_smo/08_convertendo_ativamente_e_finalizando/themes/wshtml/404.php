<section class="container">
        <div class="content">
                <header class="sectiontitle">
                    <h1>Desculpe, não encontrado o conteúdo relacionado</h1>
                    <p class="tagline">Você está vendo agora a página 404 pois não encontrado conteúdo relacionado à <b><?= $setUrl; ?></b>, mas não saia ainda. Temos algumas dicas para te ajudar com sua pesquisa!</p>
                </header>                               
                <div class="clear"></div>
            </div>

            <article class="bg-light">
                <div class="content">
                    <header class="articletitle">
                        <h1>Deixe uma sugestão de conteúdo:</h1>
                        <p class="tagline">Informe seu nome e e-mail para sugerir conteúdo relacionado à <?= $setUrl; ?></p>
                    </header>

                    <form name="sendcontent" action="obrigado" method="post">
                        <input class="box box-medium" type="text" title="Informe seu Nome" name="nome" placeholder="Informe Seu Nome"/>
                        <input class="box box-medium" type="email" title="Informe seu E-mail" name="email" placeholder="Informe Seu E-mail"/>

                        <a href="#" class="btn btn-green radius box box-medium last al-center">Deixe sua Sugestão</a>
                    </form>
                    <div class="clear"></div>
                </div>
            </article>

            <section>
                <div class="content">
                    <header class="articletitle">
                        <h1>Veja conteúdo relacionado a sua pesquisa:</h1>
                        <p class="tagline">Veja o que encontramos ao pesquisar por <b><?= $setUrl; ?></b> em nossa base de conteúdo</p>
                    </header>

                    <article class="related_item box box-small">
                        <img title="Vídeo Aula Entenda o HTML5" alt="[Entenda o HTML5]" src="<?= HOME; ?>/uploads/images/entendendo-o-html5.jpg"/>
                        <h1 class="box_video_title">Entenda o HTML5</h1>
                    </article>

                    <article class="related_item box box-small">
                        <img title="Vídeo Aula CSS Produtivo" alt="[CSS Produtivo]" src="<?= HOME; ?>/uploads/images/css-produtivo.jpg"/>
                        <h1 class="box_video_title">CSS Produtivo</h1>
                    </article>

                    <article class="related_item box box-small">
                        <img title="Vídeo Aula Design de Interação" alt="[Design de Interação]" src="<?= HOME; ?>/uploads/images/design-de-interacao.jpg"/>
                        <h1 class="box_video_title">Design de Interação</h1>
                    </article>

                    <article class="related_item box box-small last">
                        <img title="Vídeo Aula Distribuição Otimizada" alt="[Distribuição Otimizada]" src="<?= HOME; ?>/uploads/images/distribuicao-otimizada.jpg"/>
                        <h1 class="box_video_title">Distribuição Otimizada</h1>
                    </article>
                    <div class="clear"></div>
                </div>
            </section>
    <nav class="bg-orange">
        <div class="content">
            <h1 class="fontzero">Acesse nosso conteúdo principal:</h1>
            <ul class="reverse_nav">
                <?php require REQUIRE_PATH . '/inc/main_nav.php';  ?>
            </ul>
            <div class="clear"></div>
        </div>
    </nav>
</section>

    
        
        