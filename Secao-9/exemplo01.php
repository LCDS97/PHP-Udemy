<?php

class Pessoa
{

    public $nome; //Atributo

    public function falar()
    { //Método
        return "O meu nome é " . $this->nome;
    }
}

$lucas = new Pessoa();
$lucas->nome = "Lucas Conceicao";
echo $lucas->falar();

?>