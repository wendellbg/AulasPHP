<?php
// banco.php - Comunicação com o Banco de Dados

require_once "config.php"; // Depende das constantes declaradas

// Inicializa a conexão orientada a objetos
$mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);

// Valida se houve erros de conexão
if ($mysqli->connect_errno) {
    die("Problemas para conectar no banco. Verifique os dados!");
}

// Busca todos os registros para a listagem
function buscar_tarefas($mysqli) {
    $sqlBusca = "SELECT * FROM tarefas";
    $resultado = $mysqli->query($sqlBusca); // Executa o SELECT no banco
    $tarefas = array();
    
    // Varre os registros um a um guardando-os no array
    while ($tarefa = $resultado->fetch_assoc()) {
        $tarefas[] = $tarefa;
    }
    return $tarefas;
}
