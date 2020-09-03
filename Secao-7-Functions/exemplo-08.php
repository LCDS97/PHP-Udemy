<?php
// O tres pontos servem para converter todos os parametros para um tipo especificado
// o dois pontos servem para retornar o tipo especificado dos parametros retornados
function soma(int ...$valores):float
{
    return array_sum($valores);
}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(1.5, 3.3);
echo "<br>";

?>