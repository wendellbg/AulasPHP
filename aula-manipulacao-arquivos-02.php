<?php
// Abre o arquivo no modo 'r' (leitura)
$arquivo = fopen('log.txt', 'r');

if ($arquivo) {
    // feof() verifica se o ponteiro chegou ao fim do arquivo
    while (!feof($arquivo)) {
        // fgets() lê a linha atual e move o ponteiro para a próxima
        $linha = fgets($arquivo);
        echo htmlspecialchars($linha) . "<br>";
    }
    fclose($arquivo);
}
?>
