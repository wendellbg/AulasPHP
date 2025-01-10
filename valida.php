<?php	
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$site = $_POST["site"];
	$comentarios = $_POST["comentarios"];	
	$genero = $_POST["genero"];	
	
	function testa_campo($dados){
		$dados = trim($dados);
		$dados = stripslashes($dados);
		$dados = htmlspecialchars($dados);
		return $dados;
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($nome)) {
			echo "O campo nome não foi preenchido!<br>";
		} else {	
			$nome = testa_campo($nome);
			echo "Nome: $nome.<br>";
		}
		if (empty($email)) {
			echo "O campo e-mail não foi preenchido!<br>";
		} else {	
			$email = testa_campo($email);
			echo "Endereço de e-mail: $email.<br>";
		}
		if (empty($site)) {
			echo "O campo site não foi preenchido!<br>";
		} else {	
			$site = testa_campo($site);
			echo "Site: $site.<br>";
		}
		if (empty($comentarios)) {			
			echo "O campo comentários não foi preenchido!<br>";			
		} else {	
			$comentarios = testa_campo($comentarios);
			echo "Comentário: $comentarios.<br>";
		}
		if (empty($genero)) {
			echo "O campo gênero não foi preenchido!<br>";
		} else {	
			$genero = testa_campo($genero);
			echo "Genero: $genero.<br>";
		}		
	}	
?>