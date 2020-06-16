<header class="main-header">
    <div class="container">
        <hgroup>
            <h1>Cidade Online - Eventos, Promoções e Novidades!</h1>
            <h2>Confira os eventos, promoções e novidades em sua cidade. Aqui, no Cidade Online!</h2>
        </hgroup>

        <div class="header-banner">
            <!--468x60-->
            <a href="https://www.upinside.com.br/" title="Cursos Profissionais em TI">
                <img src="<?= INCLUDE_PATH; ?>/_tmp/banner_medium.png" title="UpInside Treinamentos - Cursos Profissionais em TI" alt="Campus UpInside - Cursos Profissionais em TI" />
            </a>
        </div><!-- banner -->

        <nav class="main-nav">

            <ul class="top">
                <li><a href="<?= HOME ?>" title="">Home</a></li>
                <li><a href="<?= HOME ?>/categoria/noticias" title="">Cidade Online</a>
                    <ul class="sub">
                        <li><a href="<?= HOME ?>/categoria/aconteceu" title="">Aconteceu</a></li> 
                        <li><a href="<?= HOME ?>/categoria/eventos" title="">Eventos</a></li> 
                        <li><a href="<?= HOME ?>/categoria/esportes" title="">Esportes</a></li> 
                    </ul>                
                </li>
                <li><a href="<?= HOME ?>/empresas/onde-comer" title="">Onde Comer</a></li>
                <li><a href="<?= HOME ?>/empresas/onde-ficar" title="">Onde Ficar</a></li>
                <li><a href="<?= HOME ?>/empresas/onde-comprar" title="">Onde Comprar</a></li>
                <li><a href="<?= HOME ?>/empresas/onde-se-divertir" title="">Onde Se Divertir</a></li>

                <li class="search">
                    <?php
                    $search = filter_input(INPUT_POST, 's', FILTER_DEFAULT);
                    if (!empty($search)):
                        $search = strip_tags(trim(urlencode($search)));
                        header('Location: ' . HOME . '/pesquisa/' . $search);
                    endif;
                    ?>

                    <form name="search" action="" method="post">
                        <input class="fls" type="text" name="s" />
                        <input class="btn" type="submit" name="sendsearch" value="" />
                    </form>
                </li>

            </ul>
        </nav> <!-- main nav -->

    </div><!-- Container Header -->
</header> <!-- main header -->