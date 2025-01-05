<?php
$cod = $_POST['codigo'];
$nom = $_POST['nome'];
$set = $_POST['setor'];
$pla = $_POST['plano'];
echo "Código :$cod<br>";
echo "Nome :$nom<br>";
switch ($set)
{
	case "adm";
		$setor="Admnistração";
		break;
	case "ven";
		$setor="Vendas";
		break;
	case "alm";
		$setor="Almoxarifado";	
		break;
}
echo "Setor :$setor<br>";
if($pla=="on")
	$resposta="SIM";
else
	$resposta="NÃO";
echo "Plano de Saúde?$resposta<br>";
?>
