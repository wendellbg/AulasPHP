<?php
$conn = new mysqli("localhost", "root", "", "escola");
if ($conn->connect_error) {
    die("Falha na conexao: " . $conn->connect_error);
}
echo "Conectado com MySQLi (OO)<br><br>";

// 1. Criar a consulta SQL
$sql = "SELECT matricula, nome, cpf FROM professor";
$result = $conn->query($sql);

// 2. Verificar se existem registros e exibir na tela
if ($result->num_rows > 0) {
    // O laço fetch_assoc() busca uma linha por vez até o fim da tabela
    while($row = $result->fetch_assoc()) {
        echo "MATRICULA: " . $row["matricula"] . " - Nome: " . $row["nome"] . " - CPF: " . $row["cpf"] . "<br>";
    }
} else {
    echo "Nenhum professor cadastrado.";
}

// 3. Fechar a conexão
$conn->close();
?>
