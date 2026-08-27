<?php
//Cria um vetor vazio no PHP
$erros = []; 
//Cada variável recebe o valor da outra
//$nome = $telefone = $mensagem = $email; 

//Testa se o método de envio de formulário é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//Validar o campo nome 
	//Se ele não está vazio com a função empty()
	//Se ele tem mais de 3 caracteres com a função strlen()
	if (empty($_POST["nome"])) {
		$erros[] = "Nome é obrigatório";
	} elseif (strlen($_POST["nome"]) < 3) {
		$erros[] = "Nome deve ter no mínimo 3 caracteres";
	} else {
		$nome = htmlspecialchars($_POST["nome"]);
	}

	//Validar o campo telefone
	//Se ele não está vazio com a função empty()
	//Se ele é um número com a função is_numeric()
	if (empty($_POST["telefone"])) {
		$erros[] = "Telefone é obrigatório";
	} elseif (!is_numeric($_POST["telefone"])) {
		$erros[] = "Este campo aceita apenas números";
	} else {
		$telefone = $_POST["telefone"];
	}

	//Validar mensagem
	//Se ela não está vazia com a função empty()
	//Se ela tem no mínimo 10 caracteres com a função srtlen()
	if (empty($_POST["mensagem"])) {
		$erros[] = "Este campo é obrigatório";
	} elseif (strlen($_POST["mensagem"] < 10)) {
		$erros[] = "Este campo deve ter pelo menos 10 caracteres";
	} else {
		$mensagem = htmlspecialchars($_POST["mensagem"]);
	}	

	//Validar o campo email
	//Se ele não está vazio	
	//Se ele é realmente um endereço de email válido
	if (empty($_POST["email"])) {
		$erros[] = "Este campo é obrigatório";
	} elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
		$erros[] = "Este não é um endereço de email válido";
	} else {
		$email = htmlspecialchars($_POST["email"]);
	}

	//Mostrar os resultados na tela do navegador
	if (empty($erros)) {
		echo "<h2 style='color:green'>Mensagem enviada!</h2>";
		echo "Nome: $nome<br>";
		echo "Telefone: $telefone<br>";
		echo "Email: $email<br>";
		echo "Mensagem: $mensagem<br>";
	} else {
		echo "<h2 style='color:red'>Erros encontrados:</h2><ul>";
		foreach ($erros as $erro) {
			echo "<li>$erro</li>";
		}
		echo "</ul>";
	}
}
?>	