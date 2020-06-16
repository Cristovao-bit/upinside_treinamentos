<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - MVC :: Trabalhando com Template View</title>
    </head>
    <body>
        <?php
        require ('./_app/config.inc.php');

        $read = new Read;
        $read->ExeRead('ws_categories');
        $tpl = file_get_contents("_mvc/category.tpl.html");

        foreach ($read->getResult() as $cat):
            extract($cat);
            //echo str_replace(array('#category_title#', '#category_content#'), array($category_title, $category_content), $tpl);
            //var_dump($cat);
        
            $cat['pubdate'] = date('Y-m-d', strtotime($cat['category_date']));
            $cat['category_date'] = date('d/m/Y H:i:s', strtotime($cat['category_date'])) . " hrs";
        
            $links = explode("&","#" . implode("#&#", array_keys($cat)) . "#");
            echo str_replace($links, array_values($cat), $tpl);
        endforeach;
        ?>
    </body>
</html>
