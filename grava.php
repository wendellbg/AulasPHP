<?php
//Este programa atualiza um registro no banco de dados e Faz parte da aula de CRUD
include "conecta_mysql.inc";
$codigo = $_POST['codigo'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$unidade = $_POST['unidade'];
$resultado = mysqli_query($conexao,"UPDATE produto SET codigo='$codigo', descricao='$descricao', preco='$preco', unidade='$unidade' WHERE codigo='$codigo';");
$registro = mysqli_affected_rows($conexao);
mysqli_close ($conexao);
echo $registro ." registro alterado com sucesso!";
echo "<p><a href='listar.php'>Listar produtos</a><p>";
?>