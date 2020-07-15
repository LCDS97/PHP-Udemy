<?php

function ola()
{
    // Essa função recupera todos os argumentos que foram passado de parametros para array
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Bom day", 10));
?>