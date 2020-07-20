<?php

// Escopo de variavel, significa até onde essa variavel ira ser enxergada
// Ou até onde vai ser area de atuação dessa variavel

$nome = "Luquitas";

function teste() {
    
    // Para chamar uma função global, colocar préfixo e invocar a variavel que necessita a ser utilizada
    global $nome;
    echo $nome;

}

function teste2(){
    // Dentro dessa função, não é invocado, pois não esta chamando a função global e criando uma com mesma nome, devido estar no mesmo
    // escopo, não é afetada pela variavel global
    $nome = "Lucao";
    echo $nome." Agora no teste2";
}

teste();
teste2();
?>