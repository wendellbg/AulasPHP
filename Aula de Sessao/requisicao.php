<?php
//Define o cabeçalho para interpretação correta de caracteres no navegador
header('Content-Type: text/html; charset=utf-8');

//Capturar a data e hora do servidor no momento exato do processamento da requisição
$data_requisicao = date('d/m/Y');
$hora_requisicao = date('H:i:s');

//Exibe a mensagem dinamicamente
echo "<h1>Demonstração do Ciclo de Requisição HTTP</h1>";
echo "<p>Sua requisição foi processada pelo servidor em: <strong>{$data_requisicao}</strong> às <strong>{$hora_requisicao}</strong>.</p>";
echo "<p>Se você atualizar a página com F5, uma nova requisição isolada será gerada.</p>";
?>