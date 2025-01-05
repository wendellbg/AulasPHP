<?php
	$nome=$_POST["txtNome"];
	$sobrenome=$_POST["txtSobrenome"];
	$endereco=$_POST["txtEnd"];
	$complemento=$_POST["txtComp"];
	$cidade=$_POST["txtCid"];
	$estado=$_POST["selEst"];
	$cep=$_POST["txtCep"];
	$rg=$_POST["txtRG"];
	$cpf=$_POST["txtCPF"];
	$matricula=$_POST["txtMAT"];
	$email=$_POST["txtEmail"];
	$telefone=$_POST["txtTel"];
	echo "Nome: $nome<br>";
	echo "Sobrenome: $sobrenome<br>";
	echo "Endereço: $endereco<br>";
	echo "Complemento: $complemento<br>";
	echo "Cidade: $cidade<br>";
	echo "Estado: $estado<br>";
	echo "CEP: $cep<br>";
	echo "RG: $rg<br>";
	echo "CPF: $cpf<br>";
	echo "Matricula: $matricula<br>";
	echo "Email: $email<br>";
	echo "Telefone: $telefone<br>";
?>	
	
	