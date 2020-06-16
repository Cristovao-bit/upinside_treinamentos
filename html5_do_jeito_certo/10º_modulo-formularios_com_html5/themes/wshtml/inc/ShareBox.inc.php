<?php

$pg_share = str_replace('/404', '', $pg_url);

?>

<ul class="sharebox  <?= (!empty($ShareClass) ? $ShareClass : '') ?>">
    <li class="like facebook"><span class="count">0</span> <a href="<?= urlencode($pg_share); ?>&app_id=<?= $pg_fb_app; ?>" title="Compartilhe no Facebook">Compartilhe no Facebook</a></li>
    <li class="like google"><span class="count">0</span> <a href="<?= $pg_share; ?>" title="Recomende no Google+">Recomende no Google+</a></li>
    <li class="like twitter"><span class="count">0</span> <a href="<?= urlencode($pg_share); ?>" rel="&text=<?= $pg_title; ?> <?= $pg_twitter; ?>" title="Conte Isto no Twitter">Conte Isto no Twitter</a></li>
</ul>

