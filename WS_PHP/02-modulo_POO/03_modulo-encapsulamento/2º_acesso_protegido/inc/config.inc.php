<?php

function __autoload($class) {
    
    $dirName = 'class';
    
    if(file_exists("{$dirName}/{$class}.class.php")):
        require_once ("{$dirName}/{$class}.class.php");
    else:
        die("Erro ao incluir {$dirName}/{$class}.class.php<hr>");
    endif;
    
}


