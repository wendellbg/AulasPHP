<?php
include "conecta_mysql.inc";
$resultado = mysqli_query($conexao,"SELECT * FROM produto;");
while ($linhas = mysqli_fetch_row($resultado)) {
	echo "<p>";
	foreach ($linhas as $valor) {
		echo $valor." - ";
	}
	echo "<p>";
}	
mysqli_close($conexao);
?>