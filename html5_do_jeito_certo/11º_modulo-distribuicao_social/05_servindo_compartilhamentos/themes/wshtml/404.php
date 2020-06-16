<section class="container">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1><?= $pg_title; ?></h1>
            <p class="tagline"><?= $pg_desc; ?></p>
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
                <input class="box box-medium" type="text" title="Informe Seu Nome" name="nome" placeholder="Informe Seu Nome:"/>
                <input class="box box-medium" type="email" title="Informe Seu E-mail" name="email" placeholder="Informe Seu E-mail:"/>

                <a href="#" class="btn btn-green radius box box-medium last al-center">Deixe sua Sugestão</a>
            </form>
            <div class="clear"></div>
        </div>
    </article>

    <section>        
        <div class="content">
            <header class="articletitle">
                <h1>Veja conteúdo relacionado a sua pesquisa:</h1>
                <p class="tagline">Veja o que encontramos ao pesquisa por <b><?= $setUrl; ?></b> em nossa base de conteúdo!</p>
            </header>

            <article class="related_item box box-small">
                <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= HOME; ?>/uploads/images/entendendo-o-html5.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre Entenda o HTML5">Entenda o HTML5</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>

            <article class="related_item box box-small">
                <img title="Vídeo Aula CSS Produtivo" alt="CSS Produtivo" src="<?= HOME; ?>/uploads/images/css-produtivo.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre CSS Produtivo">CSS Produtivo</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>

            <article class="related_item box box-small">
                <img title="Vídeo Aula Design de Interação" alt="Design de Interação" src="<?= HOME; ?>/uploads/images/design-de-interacao.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre Design de Interação">Design de Interação</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>

            <article class="related_item box box-small last">
                <img title="Vídeo Aula Distribuição Otimizada" alt="Distribuição Otimizada" src="<?= HOME; ?>/uploads/images/distribuicao-otimizada.jpg"/>
                <h1 class="box_video_title"><a href="#link" title="Ver mais sobre Distribuição Otimizada">Distribuição Otimizada</a></h1>
                <p class="tagline">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pharetra enim turpis, eu facilisis ante cursus et. Aliquam iaculis et leo et posuere.</p>
            </article>
            <div class="clear"></div>
        </div>     
    </section>

    <nav class="bg-orange">
        <div class="content">
            <h1 class="fontzero">Acesse nosso conteúdo principal:</h1>
            <ul class="reverse_nav">
                <?php require REQUIRE_PATH . '/inc/main_nav.php'; ?>
            </ul>
            <div class="clear"></div>
        </div>
    </nav>
</section>