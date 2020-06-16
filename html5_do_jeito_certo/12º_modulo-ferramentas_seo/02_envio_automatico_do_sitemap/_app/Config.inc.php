<?php

define('HOME', 'http://localhost/exercicio_upinside_treinamentos/html5_do_jeito_certo/12%C2%BA_modulo-ferramentas_seo/01_ckecklist_ferramentas_seo');
define('THEME', 'wshtml');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

$pg_name = 'Curso Work Series - HTML5 do Jeito Certo!';
$pg_site = 'UpInside Treinamentos';
$pg_google_author = '103958419096641225872';
$pg_google_publisher = '107305124528362639842';
$pg_fb_app = '626590460695980';
$pg_fb_author = 'robson.v.leite';
$pg_fb_page = 'upinside';
$pg_twitter = '@UpInsideBr';
$pg_domain = 'www.upisnide.com.br';
$pg_sitekit = INCLUDE_PATH . '/img/sitekit/';

switch ($Url[0]):
    case 'index':
        $pg_title = $pg_name;
        $pg_desc = 'Conheça o curso que vai te ensinar o método HTML5 do Jeito Certo. Aprenda a Desenvolver, Otimizar, Distribuir e Lançar Sites Na Internet!';
        $pg_image = $pg_sitekit . 'index.jpg';
        $pg_url = HOME;
        break;

    case 'sobre':
        $pg_title = 'Mais Sobre o Método HTML5 do Jeito Certo!';
        $pg_desc = 'Veja mais detalhes sobre o método HTML5 do Jeito Certo, Conheça a Escola e o Professor!';
        $pg_image = $pg_sitekit . 'sobre.jpg';
        $pg_url = HOME . '/sobre';
        break;

    case 'contato':
        $pg_title = 'Boot CSS para Forms e Formulários com HTML5';
        $pg_desc = 'Veja como aplicar CSS genérico para formulários, ainda aprenda sobre os novos campos do HTML5!';
        $pg_image = $pg_sitekit . 'contato.jpg';
        $pg_url = HOME . '/contato';
        break;

    default :
        $pg_title = 'Desculpe, não encontrado o conteúdo relacionado.';
        $pg_desc = 'Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <b>' . $setUrl . '</b>, mas não saia ainda. Temos algumas dicas para te ajudar com sua pesquisa!';
        $pg_image = $pg_sitekit . '404.jpg';
        $pg_url = HOME . '/404';
        break;
endswitch;





