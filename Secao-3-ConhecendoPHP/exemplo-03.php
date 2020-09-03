<?php
//Strings tanto em aspas duplas ou simples
$nome ="hcode";
$site = 'www.hcode.com.br';

//Inteiro
$ano = 1990;

//Float:
$salario = 5500.99;

//Boleano
$bloqueado = false;
$desbloqueado = true;

///////////////////////////////////////////
//Tipos compostos array ou compostos
// Tipo composto de array
$frutas = array("banana", "laranja", "maça");

//echo $frutas[2];

// Exemplo de objeto

$nascimento = new DateTime();

//var_dump($nascimento);

////////////////////////////////////
// Tipos especiais ou null

$arquivo = fopen("exemplo-03.php", "r");

//var_dump($arquivo);

// É diferente entre você definir o nulo (nulo é ausência de valores)
//e o criar uma variavel é vazio ou "", quer dizer que ja foi reservado a memória para ele com aquele espaço vazio
$nulo = NULL;
$vazio = "";
?>