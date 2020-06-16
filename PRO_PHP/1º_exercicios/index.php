<?php

/**
 * {} laço: executar a condicao
 * () expressao de condicao
 * [] seletor de valor: selecionar um valor de uma variável agrupada
 * 
 * Pra exibir valores
 * echo 'valor';
 * print 'valor';
 * print_r (); para exibir valores em array
 * 
 * == IGUAL A
 * > MAIOR QUE
 * < MENOR QUE
 * != DIFERENTE DE
 * >= MAIOR OU IGUAL A
 * <= MENOR OU IGUAL A
 * ! NEGAÇÃO
 * 
 * LOGICOS
 * || OU
 * && E
 * 
 * Verificadores de existência
 * ISSET verifica se existe a variável - ignora o conteúdo
 * EMPTY verifica se não existe a variável - verifica o conteúdo
 * 
 * foreach serve para controle de repetição de arrays
 * for serve para controle de repetição livre
 */
for ($b = 0; $b <= 10; $b++) {
    $tabu = 2;
    echo $tabu . ' x ' . $b . ' = ' . ($tabu * $b) . '<br>';
}

//Teste de cor
for ($a = 0; $a <= 3; $a++) {
    //trocando o número que vai ser o multiplo você ver que será tal cor.
    if ($a % 4 == 0) {
        $cor = "#fbc02d";
    } else {
        $cor = "#900";
    }

    echo '<p style="color:' . $cor . '">Teste de Cor</p>';
}

//Condição ternaria
$valor = 'não';
$res = ($valor == 'sim' ? 'Vamos a praia!' : 'Não vamos a praia!');
echo $res . "<hr>";

echo date('d/m/Y H:i:s');

echo "<hr>";

//Dia da semana
$diaSemana = date('w');
$diaMes = date('d');
$mesAtual = date('m');
$anoAtual = date('Y');

$diaExt = array(
    "0" => "Domingo",
    "1" => "Segunda - Feira",
    "2" => "Terça - Feira",
    "3" => "Quarta - Feira",
    "4" => "Quinta - Feira",
    "5" => "Sexta - Feira",
    "6" => "Sábado"
);

$mesExt = array(
    '01' => 'Janeiro',
    '02' => 'Fevereiro',
    '03' => 'Março',
    '04' => 'Abril',
    '05' => 'Maio',
    '06' => 'Junho',
    '07' => 'Julho',
    '08' => 'Agosto',
    '09' => 'Setembro',
    '10' => 'Outubro',
    '11' => 'Novrembro',
    '12' => 'Dezembro'
);

echo $diaExt[$diaSemana] . "<hr>";

echo "Hoje é " . $diaExt[$diaSemana] . " do dia " . $diaMes . " de " . $mesExt[$mesAtual] . " de " . $anoAtual . " ás " . date('H:i:s') . " hrs!";

echo "<hr>";