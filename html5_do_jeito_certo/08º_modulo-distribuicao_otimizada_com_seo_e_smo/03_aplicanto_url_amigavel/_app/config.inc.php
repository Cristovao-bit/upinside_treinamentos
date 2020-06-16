<?php

define('HOME' , 'http://localhost/exercicio_upinside_treinamentos/html5_do_jeito_certo/08%C2%BA_modulo-distribuicao_otimizada_com_seo_e_smo/03_aplicanto_url_amigavel');
define('THEME' , 'wshtml');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' .  THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url' , FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

/*Código para testar se está funcionando*/
/*var_dump($Url);*/