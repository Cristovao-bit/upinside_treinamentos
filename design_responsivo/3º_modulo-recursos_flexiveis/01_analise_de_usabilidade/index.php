<?php
require './header.php';
?>

<div class="content">
                <section class="lastnews">
                    <header class="title-section">
                        <h1>Confira Nossas Atualizações:</h1>
                    </header>

                    <article class="lastnews_destaque">
                        <header>
                            <div class="capaaqui"></div>
                            <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                            <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                        </header>

                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                        <a href="#" title="Leia mais sobre [TITULO]">Leia Mais</a>

                    </article>

                    <?php
                    for ($i = 1; $i <= 4; $i++):
                        ?>
                        <article class="lastnews_article">
                            <header>
                                <div class="capaaqui"></div>
                                <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                                <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                            </header>

                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries...</p>
                            <a href="#" title="Leia mais sobre [TITULO]">Leia Mais</a>

                        </article>
                    <?php endfor; ?>
                </section>

                <aside class="sidebar">
                    <header class="title-section">
                        <h1>Artigos Mais Vistos:</h1>
                    </header>

                    <?php for ($b = 1; $b <= 4; $b++): ?>
                        <article class="sidebar_widget">
                            <header>
                                <div class="capaaqui"></div>
                                <h1><a href="#" title="Leia mais sobre [TITULO]">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h1>
                                <time datetime="<?= date('Y-m-d'); ?>" pubdate><?= date('\d\i\a d/m/Y \à\s H:i\h\s'); ?></time>
                            </header>
                        </article>
                    <?php endfor; ?>
                </aside>

                <div class="clear"></div>
            </div>
<?php 
require './footer.php'; 
        