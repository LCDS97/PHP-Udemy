<?php

session_id('bqfh9j4vn9eu7ma3v76eg4p9s4');

require_once("config.php");

// Realmente aconselhavel para ajustar em arquivo de configuração para validação de usuarios em questão de logins
session_regenerate_id();

echo session_id();


?>