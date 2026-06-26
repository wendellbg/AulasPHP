<?php
//Dados da conexão
$host = "localhost";
$banco = "escola";
$usuario = "root";
$senha = "";

//DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$banco;charset=utf8";

try {
		//Cria a conexão
		$pdo = new PDO($dsn,$usuario,$senha);
		
		//Configura o modo de tratamento de erros
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Conexão realizada com sucesso!"."<br>";
	} catch (PDOException $e) {
			echo "Erro na conexão".$e->getMessage();
	}
?>	