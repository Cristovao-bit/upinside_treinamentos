<article class="container">
    <div class="content" style="padding-bottom: 10px;">
        <header class="sectiontitle">
            <h1><?= $pg_title; ?></h1>
            <p class="tagline"><?= $pg_desc; ?></p>
        </header>

        <div class="trigger trigger-infor al-center font-light" style="line-height: 1.5;">Está página está inteiramente servida com Micro Formatos. Isso é lindo! Isso é Otimização Pura!<span style="display: block; font-weight: 500">Você não entendeu? <a style="font-size: 0.8em; padding: 5px 10px;" class="btn btn-blue radius" href="https://www.google.com/webmasters/tools/richsnippets?q=https%3A%2F%2Fwww.upinside.com.br%2Fprojetos%2Fwshtml5%2Fsobre" title="Veja essa página no Google Rich Snippets!" rel="nofollow" target="_blank">Clique aqui</a>, e veja como o Google encherga essa página!</span></div>
        <div class="clear"></div>
    </div>
</article>

<section class="container bg-light main_bus" itemscope itemtype="https://schema.org/Organization">
    <div class="content">

        <header class="articletitle fl-left" style="width: 70%;">
            <h1>Conheça a <span itemprop="name">UpInside Treinamentos</span></h1>
            <p class="tagline">Saiba mais sobre a escola que ensina o método HTML5 do Jeito Certo!</p>
        </header>

        <img itemprop="image" class="fl-right boxshadow" style="width: 27%;" src="<?= HOME; ?>/uploads/mod6/upinside-treinamentos.jpg" alt="[UpInside Treinamentos]" title="UpInside Treinamentos - Cursos Profisionais em TI!"/>

        <article class="m-bottom">
            <div class="box-large">
                <h1 class="fontzero">Sobre a UpInside:</h1>
                <p itemprop="description">Fundada em 2010, a UPINSIDE se destaca por ter os melhores e mais completos cursos de desenvolvimento. Cursos profissionais, 100% em vídeo aulas, com suporte e certificação!</p>
                <p>Mas não ficamos por ai, além disso a UpInside conta com a mais avançada e intuitiva plataforma do mercado, com um ambiente responsivo onde o aluno conta com um suporte diferencial. Podendo acessar seus cursos quando e onde quiser.</p>
            </div>
        </article>

        <article class="box box-medium">
            <h1 class="title">Canais de Atendimento:</h1>
            <ul>
                <li><b>Por Telefone:</b> <span itemprop="telephone">+55 54 3381.2185</span></li>
                <li><b>Por E-mail:</b> <span itemprop="email">cursos@upinside.com.br</span></li>
                <li><b>Site Oficial:</b> <a itemprop="sameAs" href="https://www.upinside.com.br" title="UpInside Treinamentos">upinside.com.br</a></li>
            </ul>

            <p class="address" itemprop="address" itemscope itemtype="https://schema.org/Address">
                <span itemprop="streetAddress">Rua Lourival da Cruz 174</span>,<br>
                <span itemprop="postalCode">99300000</span> / <span itemprop="addressLocality">Soledade</span>, <span itemprop="addressRegion">RS</span><br>
                <span itemprop="addressCountry">Brasil</span>
                <span itemprop="geoCoordinates" itemscope itemtype="https://schema.org/GeoCoordinates">
                    <meta itemprop="latitude" content="-28.831887"/>
                    <meta itemprop="longitude" content="-52.501189"/>
                </span>
            </p>
        </article>

        <aside>
            <h1 class="title">Redes Sociais:</h1>
            <ul>
                <li><a itemprop="url" class="shoticon shoticon-google" title="UpInside no Google+" href="https://plus.google.com/+upinside" target="_blank" rel="nofollow">Acompanhe no Google+</a></li>
                <li><a itemprop="url" class="shoticon shoticon-facebook" title="UpInside no Facebook" href="https://www.facebook.com/upinside" target="_blank" rel="nofollow">Curta no Facebook</a></li>
                <li><a itemprop="url" class="shoticon shoticon-twitter" title="UpInside no Twitter" href="https://twitter.com/UpInsideBr" target="_blank" rel="nofollow">Siga no Twitter</a></li>
            </ul>
        </aside>

        <div class="clear"></div>
    </div>
</section>

<?php
$ShareClass = 'bg-gray';
require REQUIRE_PATH . '/inc/ShareBox.inc.php';
?>

<article class="container bg-blue" itemscope itemtype="https://schema.org/Person">
    <div class="content">

        <img itemprop="image" class="round fl-left boxshadow" style="width: 16%" src="<?= HOME; ?>/uploads/mod6/robson-v-leite.jpg" alt="[Robson V. Leite, Tutor do Curso WS HTML5]" title="Robson V. Leite"/>

        <div class="fl-right" style="width: 80%;">
            <header class="articletitle">
                <h1>Conheça <span itemprop="name">Robson V. Leite</span>. Seu tutor neste curso!</h1>
                <p class="tagline">Apaixonado pelo mundo web. Webmaster, trabalha com desenvolvimento, SEO e divulgação desde 2006!</p>
            </header>

            <div>
                <p>Robson V. Leite fundou sua primeira agência web em 2006, Sempre em busca de conhecimento e aprimoramento em 2010 fundou o Blog UpInside, que mais tarde veio a se tornar um portal de vídeo aulas.</p>
                <p>Em 2011 iniciou a <span itemprop="affiliation">UpInside Treinamentos</span>, e como <span itemid="jobTitle">CEO e Professor</span> vem criando os melhores e mais completos cursos em seus segmentos segundo seus alunos.</p>
                <p><span itemprop="description">Eterno aluno, apaixonado por PHP, artista da web.</span> Esse será seu tutor neste curso.</p>
                <ul class="main_bus_person">
                    <li><a itemprop="url" class="boxshadow" target="_blank" href="https://www.facebook.com/robson.v.leite" title="Robson V. Leite No Facebook!">No Facebook</a></li>
                    <li><a itemprop="url" class="boxshadow g" target="_blank" href="https://plus.google.com/+RobsonVLeite/posts" title="Robson V. Leite No Google+!">No Google+</a></li>
                    <li><a itemprop="email" class="boxshadow m" href="mailto:Robson V. Leite <cursos@upinside.com.br>" title="Enviar E-mail Para Robson V. Leite">Por E-mail</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</article>

<section class="container" itemscope itemtype="http://schema.org/Product">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Veja o que falam sobre o curso:</h1>
            <p class="tagline">Leia os depoimentos de quem já estuda o WS HTML5!</p>
        </header>
        <div class="clear"></div>
    </div>

    <div class="bg-bluelight">
        <div class="content content-page" style="padding-bottom: 20px;">

            <div style="margin-bottom: 4%">
                <p class="fontsize2 font-light" itemprop="name">Curso Work Series - HTML5 do Jeito Certo</p>
                <p itemprop="description">HTML5 do Jeito Certo trata de um conjunto de técnicas profissionais desenvolvidas e testadas pela UpInside. Fragmentando o desenvolvimento em 3 pilares para entregar um site extremamente otimizado...</p>
                <p class="fontsize1b" style="color: #CF4823" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating">
                    &starf; &starf; &starf; &starf; &starf; 
                    Media de <span itemprop="ratingValue">5</span> Estrelas Para <span itemprop="reviewCount">6</span> Avaliações!
                </p>
            </div>

            <?php
            for ($i = 1; $i <= 6; $i++):
                $last = ($i % 2 == 0 ? ' last' : '');
                ?>

                <article itemprop="review" itemscope itemtype="https://schema.org/Review" class="depoiment box box-large bg-light<?= $last; ?>" style="padding: 20px; width: 48%; margin: 0 4% 4% 0">
                    <header class="articletitle" style="margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px solid #999;">
                        <img class="round fl-left boxshadow" style="width: 15%" src="<?= HOME; ?>/uploads/mod6/robson-v-leite.jpg" alt="[Robson V. Leite]" title="Depoimento de Robson V. Leite"/>
                        <div class="fl-right" style="width: 80%;">
                            <h1 style="font-size: 1.4em;">Depoimento de <span itemprop="author">Robson V. Leite</span>:</h1>
                            <p style="margin: 5px 0;">Em <time itemprop="datePublished" datetime="2014-09-13">9 de setembro de 2014</time></p>
                            <span style="color: #CF4823">&starf; &starf; &starf; &starf; &starf;</span>
                        </div>
                    </header>

                    <p itemprop="name">Perfeito!</p>
                    <p itemprop="reviewBody">O curso é perfeito em todos os sentidos, mostrando o conteúdo completo e do zero a otimização e lançamento!</p>
                    <p>Minha nota é <span itemprop="reviewRating">5</span> em 5</p>
                    <a itemprop="itemReviewed" href="https://www.upinside.com.br/curso/curso-html5" title="Curso Work Series - HTML5 do Jeito Certo"></a>
                </article>

                <!--
                <article itemprop="review" itemscope itemtype="https://schema.org/Review" class="depoiment box box-large last bg-light" style="padding: 20px; width: 48%; margin: 0 0 4% 0;">
                    <header class="articletitle">
                        <h1>Depoimento de <span itemprop="author">Graziele Valer</span>:</h1>
                        <p style="margin: 5px 0;">Em <time itemprop="datePublished" datetime="2014-09-13">12 de setembro de 2014</time></p>
                        <span>&starf; &starf; &starf; &starf; &starf; &starf; &starf; &starf; &starf; &star;</span>
                    </header>

                    <p itemprop="name">Quase Perfeito!</p>
                    <p itemprop="reviewBody">O curso é quase perfeito em todos os sentidos, Contudo é um pouco avançado, e tive um pouco de dificuldade com o CSS básico!</p>
                    <p itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                        Minha nota foi <span itemprop="ratingValue">9</span> em uma escala de <span itemprop="worstRating">0</span> à <span itemprop="bestRating">10</span>!
                    </p>
                    <a itemprop="itemReviewed" href="https://www.upinside.com.br/projetos/wshtml5" title="Curso Work Series - HTML5 do Jeito Certo"></a>
                </article>
                -->

                <?php
                if ($last != ''):
                    echo '<div class="box-line"></div>';
                endif;
            endfor;
            ?>
            <div class="clear"></div>
        </div>
    </div>
</section>

<div class="container bg-orange">
    <div class="content content-page">
        <p class="fontsize1b font-light m-bottom al-center">Deixe seu nome e e-mail com seu interesse, e podemos te enviar uma oferta!</p>
        <form name="sendcontent" action="obrigado" method="post">
            <input class="box box-medium" type="text" title="Informe Seu Nome" name="nome" placeholder="Informe Seu Nome:"/>
            <input class="box box-medium" type="email" title="Informe Seu E-mail" name="email" placeholder="Informe Seu E-mail:"/>

            <a href="#" class="btn btn-green radius box box-medium last al-center">Quero Fazer Esse Curos!</a>
        </form>
        <div class="clear"></div>
    </div>
</div>

<section class="container bg-gray">
    <div class="content">
        <header class="sectiontitle">
            <h1>Confira as Próximas Turmas:</h1>
            <p class="tagline">Veja abaixo a lista de datas e turmas para o WS HTML5!</p>
        </header>

        <?php
        for ($i = 1; $i <= 3; $i++):
            $last = ($i % 3 == 0 ? ' last' : '');
            $x = $i * 2;
            ?>
            <article itemscope itemtype="https://schema.org/Event" class="box box-medium bg-blue boxshadow<?= $last; ?> " style="font-size: 0.8em; padding: 25px;">
                <header class="articletitle">
                    <h1 itemprop="name">WS HTML5 - Turma <?= $i + 1; ?></h1>
                    <p itemprop="description">Abertura de 50 vagas. Segunda turma do curso WS HTML5 do Jeito Certo.</p>
                </header>

                <p>
                    <time itemprop="startDate" datetime="2014-10-20T08:20:00-03:00"><b>Abertura:</b> 20 de outubro de 2014 às 8:20hs</time><br>
                    <time itemprop="endDate" datetime="2014-10-27T23:59:00-03:00"><b>Fechamento:</b> 27 de outubro de 2014 às 23:59hs</time>
                </p>

                <div itemprop="performer" itemscope itemtype="https://schema.org/Person">
                    <span>Turor: <span itemprop="name">Robson V. Leite</span></span>
                    <link itemprop="sameAs" href="https://www.upinside.com.br"/>
                    <link itemprop="image" href="<?= HOME; ?>/uploads/mod6/robson-v-leite.jpg"/>
                </div>
                <p>Tempo de curso: <span itemprop="duration">30 horas</span></p>

                <p itemprop="location" itemscope itemtype="https://schema.org/PostalAddress">
                    <span itemprop="name">Centro de Eventos</span><br>
                    <span itemprop="streetAddress">Rua 15 de Novembro 982</span>,<br>
                    <span itemprop="postalCode">99300000</span> / <span itemprop="addressLocality">Soledade</span>, <span itemprop="addressRegion">RS</span><br>
                    <span itemprop="addressCountry">Brasil</span>
                </p>

                <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
                    <meta itemprop="price" content="<?= $x + 4; ?>80.00"/>
                    <meta itemprop="priceCurrency" content="BRL"/>                    
                    <p>Valor: R$ <?= $x + 4; ?>80,00 - 50 vagas</p>
                    <a itemprop="availability" class="btn btn-green radius" title="Quero Participar" href="https://www.upinside.com.br/cesta/index/novo-item/curso-html5">Matrícula</a>
                </div>
            </article>
        <?php endfor; ?>

        <div class="clear"></div>
    </div>
</section>