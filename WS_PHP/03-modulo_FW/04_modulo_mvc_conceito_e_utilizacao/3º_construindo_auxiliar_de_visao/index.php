<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="X-AU-Compatible" content="IE=edge"/>
        <title>WS PHP - MVC :: Construindo Auxiliar de Visão</title>
    </head>
    <body>
        <?php
        require ('./_app/config.inc.php');
        $session =  new Session;
        
//        View::Load('_mvc/category');
//        
//        $read = new Read;
//        $read->ExeRead('ws_categories');
//        
//        foreach ($read->getResult() as $cat) :
//            View::Show($cat);
//        endforeach;
//        
//        echo "<h1>Request</h1>";
//        
//        foreach ($read->getResult() as $cat):
//            View::Request('_mvc/category', $cat);
//        endforeach;

          $read = new Read;
          $read->ExeRead('ws_siteviews_agent');
          View::Load('_mvc/navegador');
          
          foreach ($read->getResult() as $nav):
              $nav['agent_lastview'] = date('d/m/Y', strtotime($nav['agent_lastview']));
              View::Show($nav);
          endforeach;
        ?>
    </body>
</html>
