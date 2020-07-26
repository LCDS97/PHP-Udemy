<?php

$json = '[{"nome":"Joao","idade":20},{"nome":"Lucas","idade":23}]';

$data = json_decode($json, true);

var_dump($data);

?>