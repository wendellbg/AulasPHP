<?php
$percentual = $_POST['percentual'];
$valor = $_POST['valor'];
$percentual = ($percentual/100);
$resultado = ($valor * $percentual);
echo "<H3>Resultado: $resultado</H3>";
?>