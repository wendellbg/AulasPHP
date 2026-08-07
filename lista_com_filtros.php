<?php
$pdo = new PDO("mysql:host=localhost;dbname=seu_banco", "usuario", "senha");

// Recupera o filtro de busca de forma segura
$busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_SPECIAL_CHARS);

// Base da consulta SQL
$sql = "SELECT id, nome, email FROM usuarios WHERE 1=1";
$params = [];

// Adiciona o filtro dinamicamente se o usuário digitou algo
if (!empty($busca)) {
    $sql .= " AND (nome LIKE ? OR email LIKE ?)";
    $params[] = "%$busca%";
    $params[] = "%$busca%";
}

// Prepara e executa com segurança
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Interface de Busca -->
<form method="GET" action="lista.php">
    <input type="text" name="busca" value="<?= htmlspecialchars($busca ?? '') ?>" placeholder="Buscar por nome ou email">
    <button type="submit">Filtrar</button>
</form>

<!-- Tabela de Resultados -->
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($usuarios) > 0): ?>
            <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <!-- htmlspecialchars evita ataques XSS na exibição -->
                    <td><?= htmlspecialchars($usuario['nome']) ?></td>
                    <td><?= htmlspecialchars($usuario['email']) ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="3">Nenhum registro encontrado.</td></tr>
        <?php endif; ?>
    </tbody>
</table>
