<?php include("cabecalho.php"); ?>
<?php


$produto = $_GET["prod"];
$quantidade = $_GET["qtd"];
$val = $_GET["val"];
$val2 = $_GET["val2"];
$ingredientes = $_GET["ingrediente"];
$desc = $_GET["desc"];
$fabricacao = $_GET["fab"];
$validade = $_GET["validade"];

// Conection
$conexao = mysqli_connect('localhost','root', '', 'panificadora');

// Query de inserção

$query = "INSERT INTO produto(nome_produto,quantidade,valor,valor_revenda,ingredientes,descricao,fabricacao,validade) VALUES ('{$produto}',{$quantidade},'{$val}','{$val2}','{$ingredientes}','{$desc}','{$fabricacao}','{$validade}')";

echo 'teste';
if(mysqli_query($conexao,$query)){ ?>
    <br><br>
    <p class="alert alert-sucess"> Produto <?= $produto; ?>, adicionado com Sucesso!</p>

<?php } else {
    $msg = mysqli_error($conexao);
?>
    <br><br>
    <p class="alert alert-warning">Produto não adicionado: <?= $msg ?></p>
<?php    
}

?>

<?php include("rodape.php"); ?>

