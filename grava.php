<?php
include "conecta_mysql.inc";
$codigo=$_POST['codigo'];
$produto=$_POST['produto'];
$preco=$_POST['preco'];
$unidade=$_POST['unidade'];
$resultado=mysqli_query($conexao,"UPDATE produto SET codigo='$codigo', descricao='$produto', preco='$preco', unidade='$unidade' WHERE codigo='$codigo';");
$registro = mysqli_affected_rows($conexao);
mysqli_close ($conexao);
echo $registro ." registro alterado com sucesso!";
echo "<p><a href='listar.php'>Listar produtos</a><p>";
?>