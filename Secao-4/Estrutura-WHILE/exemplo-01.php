<?php

/*
    Testando condição de WHILE, enquanto o número não for tres ele executa o código até a condição atingir o falso porque foi o tres
    acionado, saindo da condição WHILE.
*/
$condicao = true;

while ($condicao)
{
    // Função RAND serve para trazer randomização
    $numero = rand(1, 10);

    if ($numero === 3)
    {
        echo "TRÊS CARAI";
        $condicao = false;
    }
    echo $numero . " ";
}

?>