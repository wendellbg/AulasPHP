<?php
//Define o tempo de expiração do cookie (1 hora a partir do momento atual)
$tempo_expiracao = time() + 3600;

echo "<h1>Teste de gravação e leitura de Cookies</h1>";

//Verificação de segurança: checa se o cookie existe na supervariável $_COOKIE
if (isset($_COOKIE["qtd_visitas"])) {
	$visita = $_COOKIE["qtd_visitas"] + 1;	
	echo "<p>Seja bem-vindo(a) esta é a sua visita n.º: <strong>{$visita}</strong>! (Cookie lido com sucesso).</p>";
} else {
	$visita = 1;
}
//Grava o cookie no navegador do cliente (nome, valor, expiração)
setcookie("qtd_visitas", $visita, $tempo_expiracao, "/");
?>	