<?php

// Função anonima
function teste($callback)
{
    //Processo lento
    $callback();
}

teste(function(){
    echo "Terminou carai!";
});

?>