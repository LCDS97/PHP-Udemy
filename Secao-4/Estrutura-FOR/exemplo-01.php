<?php

// Para um FOR, é um contador que existe, é necessário ter um valor inicial, depois a condição vai até; e por ultimo o auto-incremento do contador

for ($i = 0; $i < 1000; $i+=5)
{
    if($i > 200 && $i < 800) continue;

    if($i === 900) break;

    // Aqui estou utilizando o conceito de continue para uma condição que ele pode continuar se a condição do if não for entre 200 e 800 ele pode continuar
    // Mas se chegar a 900 ele interrompe o código
    echo $i . "<br>";
}

?>