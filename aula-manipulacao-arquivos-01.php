<?php
//Manipulação de arquivos com PHP
// Abre o arquivo no modo 'w' (escrita)
$arquivo = fopen('log.txt', 'w');

if ($arquivo) {
    fwrite($arquivo, "Linha 1 inserida via fluxo.\n");
    fwrite($arquivo, "Linha 2 inserida via fluxo.\n");
	fwrite($arquivo, "Esta é uma aula de PHP.\n");
	echo "Arquivo escrito com sucesso!";	
    
    // Sempre feche o arquivo após o uso
    fclose($arquivo);
}
?>
