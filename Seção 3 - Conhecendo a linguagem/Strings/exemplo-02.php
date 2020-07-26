<?php
// Para conversão de texto, para auto conversão em maiuscula
$nome ="Lucas Santos";

$nome = strtoupper($nome);

echo $nome;

// Para conversão de texto, em minuscula
$nome = strtolower($nome);
echo"<br>";
echo $nome;

// Somente primeiras letras em maiusculas
echo"<br>";
echo ucwords($nome);

// Somente a primeira letra em maiuscula
echo"<br>";
echo ucfirst($nome);
?>