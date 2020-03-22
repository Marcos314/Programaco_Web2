<?php include("cabecalho.php"); ?>

<!-- <h1>Padaria <br>Cabral</h1> -->



<main>
    <hr><br>
    <h1>Cadastrar Produto</h1>


    <form class="formulario">
        <!-- LINHA 1 -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="prod">Produto</label>
                <input type="text" class="form-control" id="prod" placeholder="Nome do Produto">
            </div>

            <div class="form-group col-md-6">
                <label for="ingredientes">Quantidade</label>
                <input type="number" class="form-control" id="qtd" placeholder="">
            </div>
        </div>
        
        <!-- VALOR -->
        <div class="form-row">

        <div class="form-group col-md-6">
            <label for="inputAddress2">Valor</label>
            <input type="number" class="form-control" id="valor" placeholder="R$ 10,00">
        </div>

        <div class="form-group com-md-6">
            <label for="inputAddress2">Valor Revenda</label>
            <input type="number" class="form-control" id="valor2" placeholder="R$ 12,00">
        </div>

        </div>
        <!-- LINHA 3 -->
        <div class="form-row">

            <div class="form-group col-md-6">
                <label for="ingredientes">Ingredientes</label>
                <input type="text" class="form-control" id="ingredientes" placeholder="400 ml de leite...">
            </div>

            <div class="form-group col-md-6">
                <label for="descricao">Descrição</label>
                <textarea type="text" class="form-control" id="desc" placeholder="Descrição do Produto"></textarea>
            </div>
        </div>       

        <!-- LINHA 4 -->
        <br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Fabricação</label>
                <input type="date" class="form-control" id="fab">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Validade</label>
                <input type="date" class="form-control" id="val">
            </div>
        </div>

        <!-- Botão -->

        <br><br>
        <button type="submit" id="btn" class="btn btn-secondary btn-lg btn-block">Cadastrar</button>
    </form>
    
    
  <hr class="linha">


</main>




<?php include("rodape.php"); ?>