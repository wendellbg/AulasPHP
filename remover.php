<?php
// remover.php - Script de exclusão física

require_once "banco.php";

$id = $_GET['id'];

// Execução segura da remoção
$sql = "DELETE FROM tarefas WHERE id = {$id}";
$mysqli->query($sql);

// Limpeza e redirecionamento de fluxo do servidor
header('Location: tarefas.php');
die();