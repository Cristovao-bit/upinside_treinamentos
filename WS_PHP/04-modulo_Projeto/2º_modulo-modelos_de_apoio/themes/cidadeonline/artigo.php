<?php
if ($Link->getData()):
    extract($Link->getData());
else:
    header('Location: ' . HOME . DIRECTORY_SEPARATOR . '404');
endif;
?>
<!--HOME CONTENT-->
<div class="site-container">

    <article class="page_article">


        <div class="art_content">

            <!--CABEÇALHO GERAL-->
            <header>
                <hgroup>
                    <h1><?= $post_title; ?></h1>
                    <div class="img capa">
                        <!--w = 578px  [ CRIAR THUMB ]-->
                        <?= Check::Image('uploads' . DIRECTORY_SEPARATOR . $post_cover, $post_title, 578); ?>
                    </div>
                    <time datetime="<?= date('Y-m-d', strtotime($post_date)); ?>" pubdate>Enviada em: <?= date('d/m/Y H:i', strtotime($post_date)); ?> Hs</time>
                </hgroup>
            </header>


            <!--CONTEUDO-->
            <div class="htmlchars">

                <?= $post_content; ?>

                <!--GALERIA-->
                <?php
                $readGb = new Read;
                $readGb->ExeRead("ws_posts_gallery", "WHERE post_id = :postid ORDER BY gallery_date DESC", "postid={$post_id}");
                if ($readGb->getResult()):
                    ?>
                    <section class="gallery">
                        <hgroup>
                            <h3>
                                GALERIA:
                                <p class="tagline">Veja fotos em <mark><?= $post_title; ?></mark></p>
                            </h3>
                        </hgroup>

                        <ul>
                            <?php
                            $gb = 0;
                            foreach ($readGb->getResult() as $gallery):
                                $gb++;
                                extract($gallery);
                                ?>
                                <li>
                                    <div class="img">
                                        <a href="<?= HOME; ?>/uploads/<?= $gallery_image; ?>" rel="shadowbox[<?= $post_id; ?>]" title="Imagem <?= $gb; ?> do post <?= $post_title; ?>">
                                            <?= Check::Image('uploads' . DIRECTORY_SEPARATOR . $gallery_image, "Imagem {$gb} do post {$post_title}", 120, 80); ?>
                                        </a>
                                    </div>
                                </li>
                                <?php
                            endforeach;
                            ?>
                        </ul>
                        <div class="clear"></div>
                    </section>
                    <?php
                endif;
                ?>
            </div>

            <!--RELACIONADOS-->
            <?php
            $readMore = new Read;
            $readMore->ExeRead("ws_posts", "WHERE post_status = 1 AND post_id != :id AND post_category = :cat ORDER BY rand() LIMIT 2", "id={$post_id}&cat={$post_category}");
            if ($readMore->getResult()):
                $View = new View;
                $tpl_m = $View->Load('article_m');
                ?>
                <footer>
                    <nav>
                        <h3>Veja também:</h3>
                        <?php
                        foreach ($readMore->getResult() as $more):
                            $more['datetime'] = date('Y-m-d', strtotime($more['post_date']));
                            $more['pubdate'] = date('d/m/Y H:i', strtotime($more['post_date']));
                            $more['post_content'] = Check::Words($more['post_content'], 20);
                            $View->Show($more, $tpl_m);
                        endforeach;
                        ?>
                    </nav>
                    <div class="clear"></div>
                </footer>
                <?php
            endif;
            ?>
            <!--Comentários aqui-->

        </div><!--art content-->

        <!--SIDEBAR-->
        <?php require(REQUIRE_PATH . '/inc/sidebar.inc.php'); ?>

        <div class="clear"></div>
    </article>

    <div class="clear"></div>
</div><!--/ site container -->