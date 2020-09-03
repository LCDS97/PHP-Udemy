<?php

// Verificando se um diretório existe, caso não existe é criado com o mkdir
$name = "images";

if (!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso";
}
else {
    // Caso queira remover o diretório pode utilizar o rmdir
    rmdir($name);
    //echo "Ja existe o diretório $name";
    echo "Foi removido com sucesso o diretório $name";
}

?>