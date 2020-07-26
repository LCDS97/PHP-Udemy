<?php

//Variaveis globais ou array super globais

//$nome = $_GET["a"];



// Toda informação que vem do POST ou GET vem em string independente do tipo de dado
// No caso é necessário converter o dado, o CAST no caso
// Para mudar na frente da variavel fica da seguinte forma:
$nome = (int)$_GET["a"];

//var_dump($nome);

// Pegar o IP do usuario, o IP do Provedor de Acesso do Usuario
//$ip = $_SERVER["REMOTE_ADDR"];
// Se eu quiser pega o arquivo que o usuário esta acessando, faça o seguinte comando
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;
// Vai servir depois para gerar um sistema de log, para mais segurança por exemplo com o log de acesso

// Encima de SESSIONS é muito util para gerar views para cada respectivo usuario

?>