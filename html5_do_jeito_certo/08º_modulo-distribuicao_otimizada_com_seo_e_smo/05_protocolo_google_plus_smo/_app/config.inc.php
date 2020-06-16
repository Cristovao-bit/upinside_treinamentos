<?php

define('HOME' , 'http://localhost/exercicio_upinside_treinamentos/html5_do_jeito_certo/08%C2%BA_modulo-distribuicao_otimizada_com_seo_e_smo/05_protocolo_google_plus_smo');
define('THEME' , 'wshtml');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' .  THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url' , FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Curso Work Series -  HTML5 do Jeito Certo!';

$pg_google_author = '103958419096641225872';
$pg_google_publisher = '107305124528362639842';

$pg_sitekit = INCLUDE_PATH . 'img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'Este exercício está sendo realizado no curso WS HTML5 do Jeito Certo da UpInside Treinamentos'; /*Tem que ter no mínimo 156 caracteris*/
        $pg_image = $pg_sitekit . 'index.png';
        $pg_url = HOME;
        break;
    
    default:
        $pg_title = '404 oppsss, não encontrado!';
        $pg_desc = 'Este exercício está sendo realizado no curso WS HTML5 do Jeito Certo da UpInside Treinamentos'; /*Tem que ter no mínimo 156 caracteris*/
        $pg_image = $pg_sitekit . '404.png';
        $pg_url = HOME;
        break;
endswitch;

