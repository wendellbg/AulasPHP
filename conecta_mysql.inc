<?php
//Código responsável pela conexão com banco de dados
	$conexao = mysqli_connect("localhost","root","");
	mysqli_select_db($conexao,"supermercado");
?>