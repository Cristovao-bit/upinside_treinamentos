<?php

define('HOME' , 'http://localhost/exercicio_upinside_treinamentos/html5_do_jeito_certo/09%C2%BA_modulo-extensibilidade_com_microformatos/02_atualizando_microdados');
define('THEME' , 'wshtml');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' .  THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url' , FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Curso Work Series -  HTML5 do Jeito Certo!';
$pg_site = 'UpInside Treinamentos';

/*Servindo o google plus*/
$pg_google_author = '103958419096641225872';
$pg_google_publisher = '107305124528362639842';

/*Servindo o Facebook*/
$pg_fb_app = '626590460695980';
$pg_fb_author = 'robson.v.leite';
$pg_fb_page = 'upinside';

/*Servindo o twitter*/
$pg_twitter = '@UpInsideBr';
$pg_domain = 'www.upinside.com.br';

$pg_sitekit = INCLUDE_PATH . 'img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'Este exercício está sendo realizado no curso WS HTML5 do Jeito Certo da UpInside Treinamentos'; /*Tem que ter no mínimo 156 caracteris*/
        $pg_image = $pg_sitekit . 'index.png';
        $pg_url = HOME;
        break;
    
    case 'sobre':
        $pg_title = 'Mais Sobre o Método HTML5 do Jeito Certo!';
        $pg_desc = 'Veja mais detalhes sobre o método HTML5 do Jeito Certo, conheça a Escola e o Professor!'; 
        $pg_image = $pg_sitekit . 'sobre.png';
        $pg_url = HOME . '/sobre';
        break;
    
    default:
        $pg_title = 'Desculpe, não encontrado o conteúdo relacionado!';
        $pg_desc = 'Este exercício está sendo realizado no curso WS HTML5 do Jeito Certo da UpInside Treinamentos'; /*Tem que ter no mínimo 156 caracteris*/
        $pg_image = $pg_sitekit . '404.png';
        $pg_url = HOME . '/404';
        break;
endswitch;

