<?php
	include "conectapdo.php";
	$sql = "INSERT INTO professor (matricula, nome, cpf) VALUES (:matricula,:nome,:cpf)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([':matricula'=>300400, ':nome'=> 'Luke Skywalker', ':cpf'=>99988877766]);
	echo "Professor cadastrado com sucesso!";
?>
