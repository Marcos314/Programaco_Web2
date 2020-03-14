<?php include("cabecalho.php"); ?>

<!-- Barra superior - navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Padaria Cabral</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar Produto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Cadastrar Funcionário</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main -->
<main class="main_img">
    <!-- Adicionar efeitos -->

</main>

 <div class="conteudo">
        <h2>Um pouco da nossa História..</h2>
        <p>Bem-vindo a Padaria Cabral
            Fundada em 30 de Maio de 1994, a Padaria Cabral tem como principais operações a fabricação, venda e distribuição de produtos de panificação, confeitaria e produtos congelados.
            
            É uma tradicional empresa com mais de 20 anos de atuação no ramo, reconhecida pela qualidade e variedade dos seus produtos (pães, cucas, bolos, tortas, doces, salgados, produtos congelados, lanches, etc) e serviços, dentre os quais destacam-se o pioneiro e inovador na região “Atendimento 24 Horas”, a distribuição de pães e produtos de confeitaria para empresas (supermercados, casas de lanches, refeitórios industriais, …), o serviço de “Tele Entregas” e a parceria “Ponto Quente”, que consiste na distribuição de pães e salgados congelados em diversas regiões do GO.<br>
            </p>

    </div>

    <div class="direita_img">
        <img src="img/paodequeijo.jpg" alt="pq">
    </div>


    <div class="espaco">
        <a href="cadastrarProd.php"> <button type="button" onclick="windows.location('cadastrarProd.php')" class="btn btn-primary btn-lg btn-block">Cadastrar Produtos</button>
    </div>


<?php include("rodape.php"); ?>