<?php

// String replacer
$empresa = "Hcode";

// Ele procura exatamente uma palavra e subistui pela próximo termo e aonde vai ser aplicado(variavel)
// str_replace("Vai procurar o que estiver aqui", "Pelo que vai subistituir", "Quem vai ser aplicado(variavel)")
$empresa = str_replace("o", "0", $empresa);
$empresa = str_replace("e", "3", $empresa);
echo $empresa;

?>