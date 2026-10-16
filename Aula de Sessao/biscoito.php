<?php
//Define o tempo de expiração do cookie (1 hora a partir do momento atual)
$tempo_expiracao = time() + 3600;

//Grava o cookie no navegador do cliente (nome, valor, expiração)
setcookie("usuario_ultimo_acesso", "Maria Silva", $tempo_expiracao);

echo "<h1>Teste de gravação e leitura de Cookies</h1>";

//Verificação de segurança: checa se o cookie existe na supervariável $_COOKIE
if (isset($_COOKIE["usuario_ultimo_acesso"])) {
	$usuario = $_COOKIE["usuario_ultimo_acesso"];
	echo "<p>Seja bem-vindo(a) de volta, <strong>{$usuario}</strong>! (Cookie lido com sucesso).</p>";
} else {
	echo "<p>O cookie 'usuario_ultimo_acesso' ainda não foi lido. Recarregue a página para ler.</p>";
}
?>	