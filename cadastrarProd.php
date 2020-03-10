<?php include("cabecalho.php"); ?>

<!-- <h1>Padaria <br>Cabral</h1> -->

<main class="main-principal2">

</main>

<h1>Cadastrar Produto</h1>
<form class="form-cadastro">
  <div class="form-group">
    <label for="exampleFormControlInput1">Produto</label><br>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Descrição</label><br>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>


  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Ingredientes</label><br>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Quantidade</label><br>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Fabricação</label><br>
    <input type="date" class="form-control" id="exampleFormControlInput1">

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Validade</label><br>
    <input type="date" class="form-control" id="exampleFormControlInput1">

  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Valor</label><br>
    <input type="number" class="form-control" id="exampleFormControlInput1">

  </div>
</form>

<div  id="btn_cadastrar">
  <button type="submit" value="Cadastrar" class="btn btn-primary btn-md">Cadastrar Produtos</button>
</div>


<?php include("rodape.php"); ?>