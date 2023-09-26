<?php echo 'Essa é a terceira aula';

echo '<br>';

$variavel = "Aula de estrutura";
echo  $variavel;

// + SOMA
// - SUBTRAÇÃO
// * MULTIPLICAÇÃO
// / DIVISÃO
// % MOD = MÓDULO

// um = é uma atribuição de valor a uma variável
$valor1 = 10;

// == é uma comparação entre os dois lados, analisando somente o valor (LEMBRA DISSO)
// === é uma comparação COMPLETA entre os dois lados, entre seus valores e seus TIPOS de dados (STRING, INT, ETC...). É O MAIS RECOMENDADO.
$valor1 == 10;
$valor1 === 10;

//atribuição simples
$valor2 = 21;
$valor3 = 10;

$valor4 = 2;

$valor4 = $valor4 + ($valor2 + $valor3);
echo '<br>';

echo $valor4 . '<br>';
echo ($valor2 % $valor3) . '<br>';

$resultado = $valor2 % $valor3;
echo '<br>' . 'O resultado da soma de ' . $valor2 . ' e ' . $valor3 . ' é ' . ($valor2 + $valor3);

echo '<br>' . 'O resultado da subtração é ' . ($valor1 - $valor2);

echo '<br>' . 'O resto da divisão entre ' . $valor2 . ' e ' . $valor3 . ' é ' . $resultado . '<br>';

// Isso é uma matriz

$dados = [
    'nome' => 'Henrique',
    'dia' => '17',
    'mes' => '04',
    'ano' => '2005',
];
echo '<br>';

echo 'Eu sou o ' . $dados['nome'], ' e nasci no dia ' . $dados['dia'], ' no mês ' . $dados['mes'], ' de ' . $dados['ano'];

echo '<br>';

echo ($dados['dia'] + $dados['mes'] + $dados['ano']) . '<br>';
echo ($dados['dia'] - $dados['mes'] - $dados['ano']) . '<br>';
echo ($dados['dia'] * $dados['mes'] * $dados['ano']) . '<br>';
echo ($dados['dia'] / $dados['mes'] / $dados['ano']) . '<br>';
echo ($dados['dia'] % $dados['mes'] % $dados['ano']) . '<br>';

echo '<br>';

$tabuada = 2;

echo '2x-1 = ' . ($tabuada * -1) . '<br>';
echo '2x-2 = ' . ($tabuada * -2) . '<br>';
echo '2x-3 = ' . ($tabuada * -3) . '<br>';
echo '2x-4 = ' . ($tabuada * -4) . '<br>';
echo '2x-5 = ' . ($tabuada * -5) . '<br>';
echo '2x-6 = ' . ($tabuada * -6) . '<br>';
echo '2x-7 = ' . ($tabuada * -7) . '<br>';
echo '2x-8 = ' . ($tabuada * -8) . '<br>';
echo '2x-9 = ' . ($tabuada * -9) . '<br>';
echo '2x-10 = ' . ($tabuada * -10) . '<br>';

echo '<br>';

echo '2x0 = ' . ($tabuada * 0) . '<br>';
echo '2x1 = ' . ($tabuada * 1) . '<br>';
echo '2x2 = ' . ($tabuada * 2) . '<br>';
echo '2x3 = ' . ($tabuada * 3) . '<br>';
echo '2x4 = ' . ($tabuada * 4) . '<br>';
echo '2x5 = ' . ($tabuada * 5) . '<br>';
echo '2x6 = ' . ($tabuada * 6) . '<br>';
echo '2x7 = ' . ($tabuada * 7) . '<br>';
echo '2x8 = ' . ($tabuada * 8) . '<br>';
echo '2x9 = ' . ($tabuada * 9) . '<br>';
echo '2x10 = ' . ($tabuada * 10) . '<br>';

echo '<br>';

if(($tabuada * 11) == 23):
    echo 'É uma conta certa';    
else:
        echo 'É uma conta errada';
endif;