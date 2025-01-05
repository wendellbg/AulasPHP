<?php
include "conecta_mysql.inc";
$resultado = mysqli_query($conexao,"SELECT * FROM  produto;");
while ($linhas = mysqli_fetch_row($resultado)) {
	echo "<p>".$linhas[0]." - ".$linhas[1]." - ".$linhas[2]." - ".$linhas[3]." - "."<a href='alterar.php?id=$linhas[0]'> Editar</a>"." - "."<a href='excluir.php?id=$linhas[0]'>Excluir</a>"."<p>";
}
mysqli_close($conexao);
echo("<a href='cadastraproduto.html'>Cadastro Produto</a>");
?>	
	