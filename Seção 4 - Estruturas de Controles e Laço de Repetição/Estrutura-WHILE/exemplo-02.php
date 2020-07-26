<?php

$total = 150;
$desconto = 0.9;

// Do While ele aplica essa condição somente uma vez

do 
{
    $total *= $desconto;
} while ($total > 100); 

echo $total;

?>