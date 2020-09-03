<?php

// Chamando a função d fopen para abrir um arquivo chamado log.txt, caso não existe, o parametro w+ cria ele
//$file = fopen("log.txt", "w+");
// Com o parametro "a+", ele preserva o conteudo do arquivo e adiciona, ja no "w+" ele sobrescreve a informação
$file = fopen("log.txt", "a+");

// Escrevendo dentro do arquivo log.txt utilizando sua variavel $file para escrever a data atual dentro dele
// OBS: para quebra de linha utiliza o \r para a linha de baixo e \n para uma nova linha
fwrite($file, date("Y-m-d H:i:s"). "\r\n");

// Fechando o arquivo
fclose($file);

echo "Arquivo atualizado com sucesso";

// Belo exemplo para criar um arquivo de log de acesso, pegando session id, ip address, nomes dos arquivos que são utilizados

?>