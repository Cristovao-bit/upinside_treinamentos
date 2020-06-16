<!--bloco de video-->
<article class="container">
    <div class="content">
        <header class="sectiontitle">
            <h1>Conheça o curso WS HTML5!</h1>
            <p class="tagline">Veja o que o tutor do curso <mark>Robson V. Leite</mark> tem a dizer!</p>
        </header>     

        <video class="video video-large main_video" src="<?= HOME; ?>/uploads/midia/video.mp4" controls width="400"></video>

        <aside class="al-center">
            <h1>Pronto para <a class="btn btn-green radius" title="Comprar Curso WS HTML5 Agora!" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar o WS HTML5</a> e Aprender de Verdade?</h1>
        </aside>

        <div class="clear"></div>
    </div>

    <footer class="bg-bluelight">
        <section class="content main_videos" style="padding-bottom: 10px;">
            <h1>Veja Algumas Aulas do Curso WS HTML5!</h1>

            <article class="box box-small">
                <div class="thumb">
                    <div class="video_play"></div>
                    <img title="Vídeo Aula Entenda o HTML5" alt="Entenda o HTML5" src="<?= HOME; ?>/uploads/images/entendendo-o-html5.jpg"/>
                </div>
                <h1 class="box_video_title">Entenda o HTML5</h1>
            </article>

            <article class="box box-small">
                <div class="thumb">
                    <div class="video_play"></div>
                    <img title="Vídeo Aula CSS Produtivo" alt="CSS Produtivo" src="<?= HOME; ?>/uploads/images/css-produtivo.jpg"/>
                </div>
                <h1 class="box_video_title">CSS Produtivo</h1>
            </article>

            <article class="box box-small">
                <div class="thumb">
                    <div class="video_play"></div>
                    <img title="Vídeo Aula Design de Interação" alt="Design de Interação" src="<?= HOME; ?>/uploads/images/design-de-interacao.jpg"/>
                </div>
                <h1 class="box_video_title">Design de Interação</h1>
            </article>

            <article class="box box-small last">
                <div class="thumb">
                    <div class="video_play"></div>
                    <img title="Vídeo Aula Distribuição Otimizada" alt="Distribuição Otimizada" src="<?= HOME; ?>/uploads/images/distribuicao-otimizada.jpg"/>
                </div>
                <h1 class="box_video_title">Distribuição Otimizada</h1>
            </article>

            <div class="clear"></div>
        </section>
    </footer>            
</article>

<!--seção relacional-->
<section class="container bg-orange">
    <!--container do title-->
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Conheça as tecnologias apresentadas:</h1>
            <p class="tagline">O Curso WS HTML5 apresenta técnicas com foco em produção e otimização de conteúdo para internet!</p>
        </header>
        <div class="clear"></div>
    </div>

    <!--container dos artigos-->
    <div class="container bg-body">
        <div class="content" style="padding-bottom: 10px;">
            <article class="main_tec_item box box-small al-center radius">
                <img src="<?= INCLUDE_PATH; ?>/img/tec_semantic.png" alt="HTML5 Semântico" title="Módulo de HTML5 Semântico">
                <h1>HTML5 Semântico:</h1>
                <p class="tagline">Aprenda e produzir conteúdo de qualidade. Otimizando cada bloco tanto para usuários quanto para robôs de busca!</p>
            </article>

            <article class="main_tec_item box box-small al-center radius">
                <img src="<?= INCLUDE_PATH; ?>/img/tec_drycss.png" alt="CSS produtivo com OOCSS" title="Módulo de CSS produtivo com OOCSS">
                <h1>CSS produtivo com OOCSS:</h1>
                <p class="tagline">Conheça as técnicas de produção do modelo OOCSS, construindo um ambiente padronizado e de ágil desenvolvimento!</p>
            </article>

            <article class="main_tec_item box box-small al-center radius">
                <img src="<?= INCLUDE_PATH; ?>/img/tec_forms.png" alt="Formulários com HTML5" title="Módulo de Formulários com HTML5">
                <h1>Formulários com HTML5:</h1>
                <p class="tagline">Conheça e aprenda a utilizar toda tecnologia dos novos elementos de formulário do HTML5!</p>
            </article>

            <article class="main_tec_item box box-small al-center radius last">
                <img src="<?= INCLUDE_PATH; ?>/img/tec_midia.png" alt="Áudio e Vídeo na Web" title="Módulo de Áudio e Vídeo na Web">
                <h1>Áudio e Vídeo na Web:</h1>
                <p class="tagline">Nunca foi tão fácil incorporar e controlar mídias na internet. Aprenda a fazer isso de forma fácil!</p>
            </article>

            <div class="box-line"></div>

            <article class="main_tec_item box box-small al-center radius">
                <img src="<?= INCLUDE_PATH; ?>/img/tec_geo.png" alt="Geolocation e HTML5 Storage" title="Módulo de Geolocation e HTML5 Storage">
                <h1>Geolocation e HTML5 Storage:</h1>
                <p class="tagline">Aprenda a utilizar a tecnologia de localização do HTML5. E ainda armazene dados de navegação apenas com HTML!</p>
            </article>

            <article class="main_tec_item box box-small al-center radius">
                <img src="<?= INCLUDE_PATH; ?>/img/tec_microdados.png" alt="Distribuição com Micro Dados" title="Módulo de Distribuição com Micro Dados">
                <h1>Distribuição com Micro Dados:</h1>
                <p class="tagline">Aprenda a utilizar o vocabulário dos micro dados para distribuir conteúdo otimizado de forma extrema!</p>
            </article>
            <div class="clear"></div>
        </div>
    </div>
</section>

<?php
$ShareClass = 'bg-light';
require REQUIRE_PATH . '/inc/ShareBox.inc.php';
?>

<!--seção temática-->
<section class="container bg-bluelight">
    <div class="content">
        <header class="sectiontitle">
            <h1 class="shorticon shorticon-config shorticon-sectiontitle ds-inblock">Ficha Técnica:</h1>
            <p class="tagline">Saiba mais sobre o conteúdo do curso WS HTML5!</p>
        </header>

        <article class="main_info box box-small"><h1>Tempo em Aula: <b>23h</b></h1></article>
        <article class="main_info box box-small"><h1>Certifica de: <b>230h</b></h1></article>
        <article class="main_info box box-small"><h1>Módulos: <b>8</b></h1></article>
        <article class="main_info box box-small last"><h1>Vídeo Aulas: <b>50</b></h1></article>

        <div class="clear"></div>
    </div>
</section>

<!--retomada e converção-->
<article class="container bg-blue">
    <div class="content content-page al-center">
        <header class="sectiontitle">
            <h1>Faça Parte Da Turma WS HTML5, Matrícule-se!</h1>
            <p class="tagline">Começe Agora Mesmo. O Curso é <mark>100% em Vídeo Aulas</mark>, <mark>Online</mark> e <mark>On Demand!</mark></p>
        </header>               

        <a class="btn btn-green btn-big radius" title="Quero Me Matricular no Curso WS HTML5 Agora!" target="_blank" href="http://www.upinside.com.br/curso/curso-html5">Comprar WS HTML5!</a>

        <footer>
            <div class="main_chamada al-center">
                Você estuda quando e onde quiser na melhor plataforma EAD. Com suporte diretamente com o tutor, e todo material disponível para download!
            </div>
        </footer>

        <div class="clear"></div>
    </div>
</article>