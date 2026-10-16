<?php
// ajudantes.php - Funções de suporte e apresentação

function traduz_prioridade($codigo) {
    $prioridade = '';
    switch ($codigo) {
        case 1:
            $prioridade = 'Baixa';
            break;
        case 2:
            $prioridade = 'Média';
            break;
        case 3:
            $prioridade = 'Alta';
            break;
    }
    return $prioridade;
}

function traduz_data_para_banco($data) {
    if ($data == "") {
        return "";
    }
    $dados = explode("/", $data);
    if (count($dados) != 3) {
        return $data; // Retorna sem alteração se não puder traduzir
    }
    return "{$dados[10]}-{$dados[11]}-{$dados}";
}

function traduz_data_para_exibir($data) {
    if ($data == "" || $data == "0000-00-00") {
        return "";
    }
    $dados = explode("-", $data);
    if (count($dados) != 3) {
        return $data;
    }
    return "{$dados[10]}/{$dados[11]}/{$dados}";
}

function traduz_concluida($concluida) {
    if ($concluida == 1) {
        return 'Sim';
    }
    return 'Não';
}

function tem_post() {
    if (count($_POST) > 0) {
        return true;
    }
    return false;
}