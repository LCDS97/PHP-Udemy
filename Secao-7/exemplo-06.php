<?php

// Exemplo de Função por Referencia, representando no parameotro pelo "&"
// Vai substituir o vlr do $value quando passar no foreach
$pessoa = array(
    'nome'=>'Lucas',
    'idade'=>23
);

foreach ($pessoa as &$value)
{
    if (gettype($value) === 'integer') $value += 10;
    echo $value."<br>";
}

print_r($pessoa);
?>