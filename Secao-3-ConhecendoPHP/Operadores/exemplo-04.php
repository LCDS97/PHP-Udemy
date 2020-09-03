<?php

// Operadores de comparação

$a = 55.0;

$b = 55;

// Comparando se $a é maior que $b
var_dump($a > $b);
echo "<br>";

// Comparando se $a é menor que $b
var_dump($a < $b);
echo "<br>";

// Um sinal de igual apenas, ele atribui o valor da variavel $b a variavel $a
var_dump($a = $b);
echo "<br>";

// Para comparação utilizar dois "==", que ele ira verificar se variavel $a é igual $b
// Importante lembrar que comparam os valores, não o tipo
var_dump($a == $b);
echo "<br>";

// Para comparar o valor e o tipo tem que utilizar "==="
var_dump($a === $b);
echo"<br>";

// Para compara se o valor é diferente utiliza-se "!="
var_dump($a != $b);
echo "<br>";

// Para compara se o valor e o tipo são diferentes utiliza-se "!=="
var_dump($a !== $b);
echo "<br>";


?>