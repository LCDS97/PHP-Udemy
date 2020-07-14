<?php

// Localizar string dentro de variaveis, ele vai indicar aonde esta a string
$frase = "A repetição é mãe da retenção";

$palavra ="mãe";
// strpos("Quem vai localizar", "O que vai localizar")
// Ele vai retornar a string aonde esta a palavra mãe
$q = strpos($frase, $palavra);

// substr("Quem vai localizar", "por onde vai começar", "e até aonde vai ser contado")
// Como ja sei aonde esta localizado a palavra string "mãe",
// eu utilizo ela na variavel e indico por onde quero começar e o limite é a minha variavel
$texto = substr($frase, 0, $q);
var_dump($texto);

// Contar até o final da frase a partir da variavel mãe, e fazer ele conta de mãe até o final da frase
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo "<br>";
var_dump($texto2);
?>