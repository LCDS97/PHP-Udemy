<?php
// O tres pontos servem para converter todos os parametros para um tipo especificado
function soma(int ...$valores)
{
    return array_sum($valores);
}

echo soma(2, 2);
echo "<br>";
echo soma(1.5, 3.3);
echo "<br>";

?>