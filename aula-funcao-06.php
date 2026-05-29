<?php
//Passando parâmetro por referência
function adiciona_cinco(&$valor) {
	$valor += 5;
}
$numero = 2; //a variavel recebe 2
adiciona_cinco($numero); //a variavel é incrementada pela função
echo $numero; //O resultado é visto na tela
?>	