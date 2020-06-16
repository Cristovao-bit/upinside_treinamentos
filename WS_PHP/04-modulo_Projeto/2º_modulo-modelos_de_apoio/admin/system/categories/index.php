<?php
if(empty($login)):
    header('Location: ../../painel.php');
    die;
endif;
?>
<div class="content cat_list">

    <section>

        <h1>Categorias:</h1>

        <?php
        $empty = filter_input(INPUT_GET, 'empty', FILTER_VALIDATE_BOOLEAN);
        if ($empty):
            WSErro("Você tentou editar uma categoria que nao existe no sistema!", WS_INFOR);
        endif;
        
        $delCat = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT);
        if($delCat):
            require('_models/AdminCategory.class.php');
            $deletar = new AdminCategory;
            $deletar->ExeDelete($delCat);
            WSErro($deletar->getError()[0], $deletar->getError()[1]);
        endif;
        
        $readSes = new Read;
        $readSes->ExeRead("ws_categories", "WHERE category_parent IS NULL ORDER BY category_title ASC");
        if (!$readSes->getResult()):
            WSErro("Desculpe, ainda não existem seções cadastradas! ", WS_INFOR); 
        else:
            foreach ($readSes->getResult() as $ses):
                extract($ses);

                $readPosts = new Read;
                $readPosts->ExeRead("ws_posts", "WHERE post_cat_parent = :parent", "parent={$category_id}");

                $readCats = new Read;
                $readCats->ExeRead("ws_categories", "WHERE category_parent = :parent", "parent={$category_id}");

                $countSesPosts = $readPosts->getRowCount();
                $countSesCats = $readCats->getRowCount();
                ?>
                <section>

                    <header>
                        <h1><?= $category_title; ?>  <span>( <?= $countSesPosts; ?> posts ) ( <?= $countSesCats; ?> Categorias )</span></h1>
                        <p class="tagline"><?= $category_content; ?></p>

                        <ul class="info post_actions">
                            <li><strong>Data:</strong> <?= date('d/m/Y H:i', strtotime($category_date)); ?>Hs</li>
                            <li><a class="act_view" target="_blank" href="../categoria/<?= $category_name; ?>" title="Ver no site">Ver no site</a></li>
                            <li><a class="act_edit" href="painel.php?exe=categories/update&catid=<?= $category_id; ?>" title="Editar">Editar</a></li>
                            <li><a class="act_delete" href="painel.php?exe=categories/index&delete=<?= $category_id; ?>" title="Excluir">Deletar</a></li>
                        </ul>
                    </header>

                    <h2>Sub categorias de vídeo aulas:</h2>

                    <?php
                    $readSub = new Read;
                    $readSub->ExeRead("ws_categories", "WHERE category_parent = :subparent", "subparent={$category_id}");
                    if (!$readSub->getResult()):
                        WSErro("Desculpe, não existem categorias cadastradas!", WS_INFOR);
                    else:
                        $a = 0;
                        foreach ($readSub->getResult() as $sub):
                            $a++;

                            $readCatPosts = new Read;
                            $readCatPosts->ExeRead("ws_posts", "WHERE post_category = :categoryid", "categoryid={$sub['category_id']}");
                            ?>
                            <article<?php
                            if ($a % 3 == 0): echo ' class="right"';
                            endif;
                            ?>>
                                <h1><a target="_blank" href="../categoria/<?= $sub['category_name']; ?>" title="Ver Categoria"><?= $sub['category_title']; ?></a>  ( <?= $readCatPosts->getRowCount(); ?> posts )</h1>

                                <ul class="info post_actions">
                                    <li><strong>Data:</strong> <?= date('d/m/Y H:i', strtotime($sub['category_date'])); ?>Hs</li>
                                    <li><a class="act_view" target="_blank" href="../categoria/<?= $sub['category_name']; ?>" title="Ver no site">Ver no site</a></li>
                                    <li><a class="act_edit" href="painel.php?exe=categories/update&catid=<?= $sub['category_id']; ?>" title="Editar">Editar</a></li>
                                    <li><a class="act_delete" href="painel.php?exe=categories/index&delete=<?= $sub['category_id']; ?>" title="Excluir">Deletar</a></li>
                                </ul>
                            </article>
                            <?php
                        endforeach;
                    endif;
                    ?>

                </section>
                <?php
            endforeach;
        endif;
        ?>

        <div class="clear"></div>
    </section>

    <div class="clear"></div>
</div> <!-- content home -->