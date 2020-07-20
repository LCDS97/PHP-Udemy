<?php

require_once("config.php");

// Faz unset para desfazer as sessions que o usuario esta
session_unset($_SESSION);

echo $_SESSION['nome'];



// Ele destrói a sessão e usuario necessita logar novamente
//session_destroy();

?>