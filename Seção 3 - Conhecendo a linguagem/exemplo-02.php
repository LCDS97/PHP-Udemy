<?php

$nome1 = "Lucas";

$sobrenome = "Santos";

$nomeCompleto = $nome1. " " .$sobrenome;

echo $nomeCompleto;

echo"<br/>";

unset($nome1);

if (isset($nome1)) {
    echo $nome1;
}

?>