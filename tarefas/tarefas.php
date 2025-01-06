<?php session_start(); //Cria uma sessão ao abrir a página HTML?>
<html>
    <head>
        <title>Gerenciador de Tarefas</title>
    </head>        
    <body>
        <h1>Gerenciador de Tarefas</h1>
        <!-- Aqui você vai escrever o restante do código -->
        <form>
            <fieldset>
                <legend>Nova tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome" />
                </label>                    
            <input type="submit" value="Cadastrar" />
            </fieldset>
        </form>
        <?php
            if (isset($_GET['nome'])) {
                /*A super variável $_SESSION é usada para escrever e ler informções.
                  Neste if ele vai pegar as informações do formulário e adicionar no array
                  lista_tarefas */
                  
                $_SESSION['lista_tarefas'][] = $_GET['nome'];        
            }

            $lista_tarefas = array();

            if (isset($_SESSION['lista_tarefas'])) {
                $lista_tarefas = $_SESSION['lista_tarefas'];                
            }
        ?>
        <table>
            <tr>
                <th>Tarefas</th>
            </tr>                                   
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td><?php echo $tarefa; ?></td>
                </tr>
            <?php endforeach ?>
        </tabel>            
    </body>            
</html>    