<?php
$id=$_GET['id'];
include "conecta_mysql.inc";
$resultado = mysqli_query($conexao, "SELECT * FROM produto WHERE codigo=$id");
echo "<form action='grava.php' method='POST'>";
while($linhas=mysqli_fetch_array($resultado)) {
?>
<p>Codigo</p>
<input type='text' name='codigo' readonly size='10' value="<?php echo $linhas[0] ?>"
><br>
<p>Nome do produto</p>
<input type='text' name='produto' size='50' value="<?php echo $linhas[1] ?>"><br>
<p>Preco</p>
<input type='text' name='preco' size='10' value="<?php echo $linhas[2] ?>"><br><p>
<p>Unidade</p>
<input type='text' name='unidade' size='10' value="<?php echo $linhas[3] ?>"><br><p>
<input type='submit' value='Salvar'><p>
<a href='listar.php'>Listar produtos</a><p>
<a href='cadastraproduto.html'>Cadastro de Produtos</a>
<?php }?>
