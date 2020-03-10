


<?php include("cabecalho.php"); ?>

<h1>Padaria <br>Cabral</h1>

<main class="main-principal3">

</main>



<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];
?>

<h1>Produtos</h1>
<div class="msg">

    
<p id="msg">
Produto: <?= $nome;?>
<br>
Valor: R$ <?= $preco;?>,00 
<br>
Produto adicionado com sucesso!!</p>


</div>

<?php include("rodape.php");?>

