<?php

// Onde ele vai procurar as classes 
spl_autoload_register(function($nameClass){

    var_dump($nameClass);
    // Pasta onde vai procurar as classes (Diretório de classes)
    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php";

    if (file_exists($filename)){
        require_once($filename);
    }
});

?>