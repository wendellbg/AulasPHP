<?php
/* Autor: Professor Wendell Bento Geraldes
Data: 21/09/2023
Versão 1.0
*/
$salario = 1010; //R$
$tempo_servico = 12; //Meses
$tem_reclamacoes = false; //booleano
if ($salario > 1000) {
	if ($tempo_servico >= 12) {
		if ($tem_reclamacoes != true) {
			echo "<h1>Parabéns, você foi promovido(a)!</h1>";
		}
	}
}
?>

