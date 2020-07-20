<?php
class Pessoa {
    // Publico todo mundo ve
    public $nome = "Lucas";
    // Quem herda a classe pode utilizar
    protected $idade = 22;
    // Quem herda não pode usar ele
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}
// Classe extendendo propriedades da classe Pessoa
class Programador extends Pessoa {
    public function verDados(){
        echo get_class($this) . "<br/>";
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
    
}

$objeto = new Programador();

//echo $objeto->idade . "<br/>";
$objeto->verDados();
?>