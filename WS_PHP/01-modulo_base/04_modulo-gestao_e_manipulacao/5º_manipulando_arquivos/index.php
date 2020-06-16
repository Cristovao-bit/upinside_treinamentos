<?php
//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

$BaseDir = getcwd() . "/05";
echo $BaseDir;
echo "<hr>";

//w ler
//r escrever
//a anexar

$File = fopen("{$BaseDir}/05.txt", "w");//criar um arquivo
$Txt = "Cristovao L. Braga\r\nEstudando a linguagem PHP\r\nUpInside Treinamentos";
fwrite($File, $Txt);

$add = "\r\nCurso em Desenvolvimento Web";//adicionei mas uma frase no arquivo
$Filetrue = fopen("{$BaseDir}/05.txt", 'a');
fwrite($Filetrue, $add);
fclose($Filetrue);

$FileRead = fopen("{$BaseDir}/05.txt", 'r');//pegue o texto que estava no arquivo e expressei no browser
while (!feof($FileRead)):
    $Dado = fgets($FileRead);
    echo "{$Dado}<br>";
endwhile;
fclose($FileRead);
echo "<hr>";

$File = "{$BaseDir}/05.txt";//agora vai ser pego todo o conteudo e reescrito a ultima linha
//$Filecontent = file_get_contents($File);
//file_put_contents($File, $Filecontent . $add);

//$File = File($File);
//var_dump($File);

copy($File, getcwd() . '\05\test.txt');//copiou o arquivo com o mesmo conteudo.
unlink($File);//remoção do arquivo.