<?php
include "conecta_mysql.inc";
$codigo = $_POST["codigo"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$unidade = $_POST["unidade"];
$resultado = mysqli_query($conexao, "INSERT INTO produto VALUES ($codigo,'$descricao',$preco,'$unidade');");
$linhas = mysqli_affected_rows($conexao);
mysqli_close($conexao);
echo "<p>";
echo "Foram inseridos ".$linhas." registros";
echo "<p><a href='listar.php'>Listar produtos</a><p>";
?>