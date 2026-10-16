<?php
session_start();
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$_SESSION["usuario"] = $usuario;
$_SESSION["senha"] = $senha;
header("Location: boas_vindas.php");
?>
