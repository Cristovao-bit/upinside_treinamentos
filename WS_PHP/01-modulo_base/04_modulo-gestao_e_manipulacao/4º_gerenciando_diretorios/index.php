<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

function checkDir($Dir){
    if(file_exists($Dir) && is_dir($Dir)):
        return true;
    else:
        return false;
    endif;
}

$getDir = getcwd();
$setDir = "{$getDir}/04";
echo "{$getDir}<br>";

//criando pasta
if(!checkDir($setDir)):
    mkdir($setDir, 0777);
endif;

echo "<hr>";
//removendo pasta
//if(checkDir($setDir)):
//    rmdir($setDir);
//endif;

//renomea pasta
//rename($setDir, "{$getDir}/uploads");

//mover pasta
//rename("{$getDir}/uploads", "{$setDir}/uploads");

//entrando na pasta
chdir($setDir);
echo getcwd();

echo "<hr>";
//saindo da pasta
//chdir("../");
//echo getcwd();

$newDir = getcwd();
$openDir = opendir($newDir);
while ($File = readdir($openDir)):
    if ($File != '.' && $File != '..'):
        echo "<img src='04/{$File}' width='200'/><br>";
        echo "{$File}<br>";
    endif;
endwhile;