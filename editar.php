<?php
// editar.php - Controlador de atualização segura

require_once "banco.php";
require_once "ajudantes.php";

$tem_erros = false;
$erros_validacao = array();

if (tem_post()) {
    $tarefa = array();
    $tarefa['id'] = $_POST['id'];

    // Validação de segurança obrigatória
    if (isset($_POST['nome']) && strlen($_POST['nome']) > 0) {
        // Blindagem contra SQL Injection: escapando a string ativamente
        $tarefa['nome'] = $mysqli->escape_string($_POST['nome']);
    } else {
        $tem_erros = true;
        $erros_validacao['nome'] = 'O nome da tarefa é obrigatório!';
    }

    // Higienizando os demais campos textuais recebidos via POST
    $tarefa['descricao'] = $mysqli->escape_string($_POST['descricao']);
    $tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
    $tarefa['prioridade'] = $_POST['prioridade'];
    
    // Tratando o estado de Checkbox (não enviado quando desmarcado)
    $tarefa['concluida'] = isset($_POST['concluida']) ? 1 : 0;

    if (!$tem_erros) {
        // Execução segura da query relacional UPDATE
        $sql = "UPDATE tarefas SET
                    nome = '{$tarefa['nome']}',
                    descricao = '{$tarefa['descricao']}',
                    prioridade = {$tarefa['prioridade']},
                    prazo = '{$tarefa['prazo']}',
                    concluida = {$tarefa['concluida']}
                WHERE id = {$tarefa['id']}";

        $mysqli->query($sql);

        // Prevenção de F5: Redirecionamento HTTP com encerramento imediato de script
        header('Location: tarefas.php');
        die();
    }
} else {
    // Se não houver POST, busca os dados originais no banco usando o ID da URL
    $id = $_GET['id'];
    $sqlBusca = "SELECT * FROM tarefas WHERE id = {$id}";
    $resultado = $mysqli->query($sqlBusca);
    $tarefa = $resultado->fetch_assoc();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="tarefas.css" type="text/css" />
</head>
<body>
    <h1>Gerenciador de Tarefas</h1>

    <form method="POST">
        <!-- Campo do tipo hidden transportando o ID de forma invisível -->
        <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>" />

        <fieldset>
            <legend>Editar tarefa</legend>
            <label>
                Tarefa: 
                <?php if ($tem_erros && isset($erros_validacao['nome'])) : ?>
                    <span class="erro" style="color: red;"><?php echo $erros_validacao['nome']; ?></span>
                <?php endif; ?>
                <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>" />
            </label>

            <label>
                Descrição (Opcional):
                <!-- Textarea: Valor impresso estritamente entre as tags -->
                <textarea name="descricao"><?php echo $tarefa['descricao']; ?></textarea>
            </label>

            <label>
                Prazo (Opcional):
                <input type="text" name="prazo" value="<?php echo traduz_data_para_exibir($tarefa['prazo']); ?>" />
            </label>

            <fieldset>
                <legend>Prioridade:</legend>
                <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?> /> Baixa
                <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == 2) ? 'checked' : ''; ?> /> Média
                <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == 3) ? 'checked' : ''; ?> /> Alta
            </fieldset>

            <label>
                Tarefa concluída:
                <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['concluida'] == 1) ? 'checked' : ''; ?> />
            </label>

            <input type="submit" value="Atualizar" />
        </fieldset>
    </form>
</body>
</html>
