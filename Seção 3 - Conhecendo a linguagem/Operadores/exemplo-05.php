<?php

// Novos operadores do PHP
// Para projeto de que tendem a ser dinamicos, é interessante utilizar esse comparador pois você não tem certeza
// do valor que ira vier, e utilizar ele toma decisões que foi encontrado com base nessas comparações que descrevi

// Spacechip

//$a = 35;
//$b = 55;

// Para comparação do tipo maior, menor ou igual
// Maior é  1
// Igual é  0
// Menor é -1
//var_dump($a <=> $b);

// Para tratar sobre valores nulos

$a = NULL;

$b = 8;

$c = 10;

echo $a ?? $b ?? $c;

// Caso necessite de um valor if, else, pode se utilizar esse operador

?>
