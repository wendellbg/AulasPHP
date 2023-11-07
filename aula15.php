<?php
//primeiro faz a conexão com o SGBD
$conexao = mysqli_connect("localhost","root",""); 
//Depois seleciona o banco de dados
mysqli_select_db($conexao,"dbteste"); 
//Agora vamos testar a nossa conexão
if ($conexao) {
	echo "Sua conexão com MySQL foi realizada com sucesso!<br>";
} else {
	echo "Falha na conexão com o MySQL!<br>";
}
//Agora vamos testar se a instrução SQL foi bem sucedida
$resultado = mysqli_query($conexao,"SELECT * FROM produto;");
$linhas = mysqli_num_rows($resultado);
$campos = mysqli_num_fields($resultado);
if ($resultado) {
	echo "Sua instrução SQL foi bem sucedida!<br>";
	//echo "A consulta retornou $linhas registros!<br>";
	//echo "A tabela possui $campos campos!";	
} else {
	echo "Falha na instrução SQL!<br>";
}
echo "Codigo Descrição Preço Unidade";
while ($linhas = mysqli_fetch_row($resultado)) {	
	echo "<p>".$linhas[0]." - ".$linhas[1]." - ".$linhas[2]." - ".$linhas[3]."</p>";
}	
//Fecha a conexão com o SGBD
mysqli_close($conexao);
?>