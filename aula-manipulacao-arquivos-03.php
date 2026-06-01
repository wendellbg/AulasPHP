<?php
//Manipulação de arquivos com PHP
// Abre o arquivo no modo 'w' (escrita)
$arquivo = fopen('contatos.csv', 'w');
$nome = "Wendell";
$telefone = "7384374837";
$email = "wendellbg@gmail.com";

if ($arquivo) {
    fwrite($arquivo, $nome.",");
    fwrite($arquivo, $telefone.",");
	fwrite($arquivo, $email);
	echo "Arquivo escrito com sucesso!";	
    
    // Sempre feche o arquivo após o uso
    fclose($arquivo);
}
?>