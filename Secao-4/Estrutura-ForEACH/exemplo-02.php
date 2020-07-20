/* Ideia de formulario dinamico
    Aqui nesse exemplo ele esta pegando todos os valores desse form e ja colocando no foreach através
    $key   = Representa o nome do campo
    $value = O valor que esta sendo inserido no campo
*/
<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php

if (isset($_GET)) 
{


foreach ($_GET as $key => $value)
{
    echo "Nome do campo: " .$key."<br>";
    echo "Valor do campo: " . $value;
    echo "<hr>";
}
}
?>