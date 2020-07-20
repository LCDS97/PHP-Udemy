<?php

$diaDaSemana = date("w");

/* Switch serve para comparar o valor de uma variavel com uma condição que eu ja determinei na aplicação
    Utiliza-se Case(Casos) para poder determinar uma condição, nesse exemplo eu puxo o dia da semana e substituto para apresentar o dia
    da semana
    Case seleciona o resultado da condição da variavel
     Defini o código ou comando ser executado
    Utiliza o break para determinar uma quebra e gerar a segunite condição
*/
switch($diaDaSemana) 
{
    case 0:
        echo "Domingo";
    break;

    case 1:
        echo "Segunda";
    break;

    case 2:
        echo "Terça";
    break;

    case 3:
        echo "Quarta";
    break;

    case 4:
        echo "Quinta";
    break;

    case 5:
        echo "Sexta";
    break;

    case 6:
        echo "Sábado";
    break;

    // Caso não é esperado o valor das condições do case, eu entro com uma condição default para responder
    default:
    echo "Dia da semana inválida!";
break;

}

?>