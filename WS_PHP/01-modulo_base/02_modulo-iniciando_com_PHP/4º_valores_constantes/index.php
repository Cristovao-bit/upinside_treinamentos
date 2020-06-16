<?php

//ALTERANDO DOCUMENTO PARA HTML
header('content-type: text/html; charset: utf-8');

//COMPILAÇÃO
const DEV_NAME = "Cristovão L. Braga";
const DEV_AGE = 25;

echo "Meu nome é " . DEV_NAME . ". Eu tenho ". DEV_AGE;
echo "<hr>";

define("DB_NAME", "_wsphp");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_HOST", "localhost");

$db = mysqli_connect(DB_NAME, DB_USER, DB_PASS, DB_HOST);
if ($db):
    echo "Conectamos com o db: " . DB_NAME;
else:
    echo "Erro ao conectar: " . mysqli_connect_error();
endif;
