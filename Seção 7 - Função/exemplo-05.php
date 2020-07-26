<?php
// Exemplo de parametro por valor
// Mesmo alterando dentro da função, a variavel $a permance com o mesmo valor, só altera somente na função
$a = 10;

function trocaValor($a)
{
    $a += 50;
    return $a;
}


echo trocaValor($a);
echo "<br>";
echo $a;
?>