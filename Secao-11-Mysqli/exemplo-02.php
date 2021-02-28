<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {
    echo "Error: ".$conn->conect_error;
}

$resultConsultar = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

// Fetch assoc é o associatiavo de array
// o while enquanto olha pro banco vai retornar um resultado se tiver dados na tabela e atribui a variavel row
while ($row = $resultConsultar->fetch_assoc()){

    array_push($data, $row);
}

echo json_encode($data);


?>