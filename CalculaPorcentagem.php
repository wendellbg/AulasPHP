<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Porcentagem</title>
    <link rel="stylesheet" href="formcss.css">
</head>
<body>
    <form method="post" action="" class="calculadora-form">
        <div class="campo-container">
            <label for="percentual">Percentual (%):</label>
            <input type="text" id="percentual" name="percentual" placeholder="Ex: 10" required>
        </div>

        <div class="campo-container">
            <label for="valor">Valor (R$):</label>
            <input type="text" id="valor" name="valor" placeholder="Ex: 500" required>
        </div>

        <div class="botoes-container">
            <input type="submit" name="enviar" value="Calcular" class="btn-enviar">
            <input type="reset" name="limpar" value="Limpar" class="btn-limpar">
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
            $percentual = floatval(str_replace(',','.',$_POST['percentual']));
            $valor = floatval(str_replace(',','.',$_POST['valor']));
            $resultado = ($percentual / 100) * $valor;
            ?>                
            <div class="resultado">
                <span>Resultado</span>
                <strong>R$ <?= number_format($resultado, 2, ',', '.') ?></strong>        
            </div>
            <?php
        }
        ?>
    </form>    
</body>
</html>
