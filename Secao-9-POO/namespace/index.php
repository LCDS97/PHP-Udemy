<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Lucas Santos");
$cad->setEmail("lucas@email.com");
$cad->setSenha("1234ok");

$cad->registrarVenda();

?>