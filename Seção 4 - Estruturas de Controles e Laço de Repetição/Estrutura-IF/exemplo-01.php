<?php

// Estrutura do IF
$qualIdade = 60;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 50;

if ($qualIdade < $idadeCrianca) 
{
 echo "criança";
}
else if($qualIdade < $idadeMaior)
{
    echo "Adolescente";
}
else if($qualIdade < $idadeMelhor)
{
    echo "Adulto";  
}
else
{
    echo "Idoso";
}

echo "<br>";


// Operador de Ternário utiliza-se
// Menor de Idade e Maior de Idade
echo ($qualIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>