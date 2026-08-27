<?php
$nome = $email = $genero = $comentario = $site = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Verifica se o campo nome não está vazio
	if (empty($_POST["nome"])) {
		echo "Erro: O campo nome é obrigatório!<br>";
	}
	//Verifica se o campo nome não tem menos de 20 caracteres
	if (strlen($_POST["nome"]) < 50) {
		echo "Erro: O campo nome deve ter pelo menos 20 caracteres<br>";
	}
    //Verifica se o campo email não está vazio	
	if (empty($_POST["email"])) {
		echo "Erro: O campo email é obrigatório!<br>";
	}	
	//Verifica se o campo site não está vazio
	if (empty($_POST["site"])) {
		echo "Erro: O campo site é obrigatório!<br>";
	}	
	$nome = testa_campo($_POST["nome"]);
	$email = testa_campo($_POST["email"]);
	$genero = testa_campo($_POST["genero"]);
	$comentario = testa_campo($_POST["comentario"]);
	$site = testa_campo($_POST["site"]);
}
//Função para validar os campos do formulário
function testa_campo($dados) {			
		$dados = trim($dados); //Retira caracteres especiais do inicio e fim da palavra
		$dados = stripslashes($dados); //Remove barras invertidas da palavra
		$dados = htmlspecialchars($dados); //Remove os caracteres < e > da palavra
		
		return $dados;
}
echo "<h2>Seus dados</h2>";
echo $nome;
echo "<br>";
echo $email;
echo "<br>";
echo $genero;
echo "<br>";
echo $comentario;
echo "<br>";
echo $site;	
?>