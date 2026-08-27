<!-- tabela.php - Exibição dos registros cadastrados -->
<table>
    <tr>
        <th>Tarefa</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($lista_tarefas as $tarefa) : ?>
        <tr>
            <td><?php echo $tarefa['nome']; ?></td>
            <td><?php echo $tarefa['descricao']; ?></td>
            <td><?php echo traduz_data_para_exibir($tarefa['prazo']); ?></td>
            <td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
            <td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
            <td>
                <!-- Passagem de ID dinâmico via parâmetros de URL -->
                <a href="editar.php?id=<?php echo $tarefa['id']; ?>">Editar</a> | 
                <a href="remover.php?id=<?php echo $tarefa['id']; ?>" 
                   onclick="return confirm('Deseja realmente remover esta tarefa?');">
                   Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>