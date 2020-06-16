<?php
if ($Link->getData()):
    extract($Link->getData());
    $empresa_views = ($empresa_views ? $empresa_views : '0');
else:
    header('Location: ' . HOME . DIRECTORY_SEPARATOR . '404');
endif;
?>
<!--HOME CONTENT-->
<div class="site-container">

    <article class="empresa_article">

        <div class="emp_content">

            <!--CABEÇALHO GERAL-->
            <header>
                <div class="img capa">
                    <!--w = 578px  [ CRIAR THUMB ]-->
                    <?= Check::Image('uploads' . DIRECTORY_SEPARATOR . $empresa_capa, $empresa_title, 578); ?>
                </div>

                <hgroup>
                    <div class="views"><span><?= $empresa_views; ?></span></div>
                    <h1><?= $empresa_title; ?></h1>
                    <h2><?= $empresa_ramo; ?></h2>
                </hgroup>
            </header>

            <address>
                <?= $empresa_sobre; ?>                   
            </address>

            <h3 class="uicon site"><a href="<?= $empresa_site; ?>" target="_blank" rel="nofollow">Visite nosso site</a></h3>
            <h3 class="uicon face"><a href="http://www.facebook.com/<?= $empresa_facebook; ?>" target="_blank" rel="nofollow">Upinside Treinamentos no Facebook</a></h3>
            <h3 class="uicon share"><a onclick="return !window.open(this.href, 'Facebook', 'width=640,height=300')" href="https://www.facebook.com/sharer/sharer.php?u=<?= HOME; ?>/empresa/<?= $empresa_name; ?>" target="_blank" rel="nofollow">Compartilhe Isso</a></h3>

<!--<iframe width="578" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?q=ENDERECO&amp;ie=UTF8&amp;hq=&amp;hnear=ENDERECO&amp;t=m&amp;z=16&amp;ll=&amp;hl=pt-BR&amp;iwloc=A&amp;output=embed" style="text-align:left; margin-top: 20px;"></iframe>-->

            <div class="clear"></div>
        </div>

        <!--RELACIONADOS-->
        <footer>
            <nav>
                <h3>Veja também:</h3>
                <?php
                $readMais = new Read;
                $readMais->ExeRead("app_empresas", "WHERE empresa_status = 1 ORDER BY rand() LIMIT 4");
                if ($readMais->getResult()):
                    $View = new View;
                    $tpl = $View->Load('empresa_p');
                    foreach ($readMais->getResult() as $mais):
                        $View->Show($mais, $tpl);
                    endforeach;
                endif;
                ?>
            </nav>
            <div class="clear"></div>
        </footer>

        <!--Comentários aqui-->
    </article>
    <!--SIDEBAR-->

    <?php require(REQUIRE_PATH . '/inc/sidebar.inc.php'); ?>

    <div class="clear"></div>
</div><!--/ site container -->