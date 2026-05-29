<?php
//Biblioteca de Funções
//1.Função que mostra uma mensagem na tela
function minhaMensagem() {
  echo "BOM DIA PESSOAL!";
}
//2.Função com parametro para mostrar nomes tela
function familia($nomes) {
	echo "Estes são os meus parentes: $nomes.<br>";
}
//3.Função com dois ou mais parametros
function nomeFamilia($nome, $sobrenome) {
	echo "Estes são os meus parentes: $nome $sobrenome.<br>";
}
//4.Função com parâmetro default(padrão)
function setAltura($altura = 1.80) {
	echo "A altura é : $altura metros<br>";
}
//5.Função com retorno(return)
function soma($x, $y) {
	$resultado = $x + $y;
	return $resultado; //O return é usado para retornar um valor
}
//6.Passando parâmetro por referência
function adiciona_cinco(&$valor) {
	$valor += 5;
}
//Função para converter Fahrenheit para Celsius
function converteFC($numero) {
	$resultado = ($numero - 32) / 1.8;
	return $resultado;
}	
?>