<?php
$id=$_GET['id'];
include "conecta_mysql.inc";
$resultado=mysqli_query($conexao,"DELETE FROM produto WHERE codigo=$id;");
$registro=mysqli_affected_rows($conexao);
echo "<p>";
echo $registro. " registro excluido com sucesso!";
echo "<p>";
mysqli_close($conexao);
echo "<p><a href='listar.php'>Listar produtos</a><p>";
?>