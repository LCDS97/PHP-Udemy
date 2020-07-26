<?php

// Aqui estou fazendo uma função de parametro no caso adicionando
// O parametro fica na função e voce pode acionar como pré requisito em outras funções
function ola($texto, $periodo="bom dia porra!")
{
    return "Olá $texto! $periodo<br>";
}
// Valores obrigatorios na função, sempre são definido a esquerda
// Sempre precisa passar o primeiro parametro, para passar o segundo
echo ola("mundo");
echo ola("", "Boa noite, vai dormir");
echo ola("Necessitas", "Boa tarde bosta");
echo ola("Xorasti");

?>