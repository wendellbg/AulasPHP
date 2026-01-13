<?php
$percentual = $_POST['percentual'];
$valor = $_POST['valor'];
$resultado = ($valor * ($percentual/100));
echo "<p>Resultado: .$resultado<p>";
?>