<?php

//Veriificando arquivos dentro do diretório desjeado

$images = scandir("images");
$data = array();

foreach ($images as $img) {
    // Criando a condição caso ele encontre os diretorio raiz e base mostre os nomes dos arquivos
    if (!in_array($img, array(".", ".."))) {
        // Especificnado a variavel de identificação de cada arquivo
        $filename = "images".DIRECTORY_SEPARATOR. $img;
        // Mostrar informações, como diretório do arquivo, extensão, filename e basename
        $info = pathinfo($filename);
        // Tamanho do arquivo em bytes e adiciona uma chave ao filename
        $info["size"] = filesize($filename);
        // Mostrando a data de modificação do arquivo
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        // Acessar o arquivo pela url mostrando o caminho dele
        $info["url"] = "http://localhost/dir/".str_replace("\\","/",$filename);
        // Juntando as informações nesse array
        array_push ($data, $info);
    }
}

echo json_encode($data);


?>