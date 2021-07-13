<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$somaDosNumeros = $a + $b;
EcHo $somaDosNumeros;

echo '<br>';
echo isset($somaDosNumeros); # verifica se a variavel está ou não setada 

unset($somaDosNumeros);      # "limpa" a variavel
echo '<br>';  
var_dump($somaDosNumeros);


$variavel = "Agora sou uma string!";
echo '<br>' . $variavel;

//Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; // evitar
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>' . 
var_dump($_SERVER["HTTP_HOST"]);