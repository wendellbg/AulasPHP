<?php
include "conectapdo.php";

$sql = "SELECT * FROM professor";
$stmt = $pdo->Query($sql);
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $linha['matricula']."-".$linha['nome']."-".$linha['CPF']."<br>";
}
?>	