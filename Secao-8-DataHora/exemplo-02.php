<?php

//$ts = strtotime("2001-09-11");
$data = $_POST['date'];

//$ts = strtotime("-10 day");

$exibir = strtotime($data);

$ts = strtotime("now");
$agora = date("h:m", $ts);

echo date("l, d/m/Y", $exibir);

//echo date("l, d/m/Y", $ts);

?>

<html>
<form method="POST">
<label for="date"></label>
<input type="date" name="date" placeholder="Insira um número">
<button name="enviar">Enviar</button>
</form>

<h3>A hora agora é <?php echo $agora?></h3>


</html>