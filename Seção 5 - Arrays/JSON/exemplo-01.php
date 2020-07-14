<?php
// Outro exemplo de array bidimensional
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>20
));
array_push($pessoas, array(
    'nome'=>'Lucas',
    'idade'=>23
));

echo json_encode($pessoas);


?>