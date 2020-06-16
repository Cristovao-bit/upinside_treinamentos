<?php
$search = $Link->getLocal()[1];
$count = ($Link->getData()['count'] ? $Link->getData()['count'] : '0');
?>

<!--HOME CONTENT-->
<div class="site-container">

    <section class="page_categorias">
        <header class="cat_header">
            <h2>Pesquisa por: <?= $search; ?></h2>
            <p class="tagline">Sua pesquisa por <?= $search; ?> retornou <?= $count; ?> resultados!</p>
        </header>

        <?php
        $getPage = (!empty($Link->getLocal()[2]) ? $Link->getLocal()[2] : 1);
        $Pager = new Pager(HOME . '/pesquisa/' . $search . '/');
        $Pager->ExePager($getPage, 12);

        $readArt = new Read;
        $readArt->ExeRead("ws_posts", "WHERE post_status = 1 AND (post_title LIKE '%' :link '%' OR post_content LIKE '%' :link '%') ORDER BY post_date DESC LIMIT :limit OFFSET :offset", "link={$search}&limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");
        if (!$readArt->getResult()):
            $Pager->ReturnPage();
            WSErro("Desculpe, sua pesquisa não retornou resultados. Você pode resumir sua pesquisa, ou tentar outros termos!", WS_INFOR);
        else:
            $cc = 0;
            $View = new View;
            $tpl_art = $View->Load('article_m');
            foreach ($readArt->getResult() as $art):
                $cc++;
                $class = ($cc % 3 == 0 ? ' class="right"' : null);
                echo "<span{$class}>";
                $art['post_title'] = Check::Words($art['post_title'], 9);
                $art['post_content'] = Check::Words($art['post_content'], 20);
                $art['datetime'] = date('Y-m-d', strtotime($art['post_date']));
                $art['pubdate'] = date('d/m/Y H:i', strtotime($art['post_date']));
                $View->Show($art, $tpl_art);
                echo "</span>";
            endforeach;
        endif;

        echo '<nav class="paginator">';
        echo '<h2>Mais resultados para NOME DA CATEGORIA</h2>';

        $Pager->ExePaginator("ws_posts", "WHERE post_status = 1 AND (post_title LIKE '%' :link '%' OR post_content LIKE '%' :link '%')", "link={$search}");
        echo $Pager->getPaginator();

        echo '</nav>';
        ?>
    </section>
    <div class="clear"></div>

</div><!--/ site container -->