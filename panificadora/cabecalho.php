<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Panificadora Cabral</title>
    <!--CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Viaoda+Libre&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-dark navbar-expand-lg navbar-default fixed-top">

        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <h1>PadariaCabral</h1>
                <!-- <img src="img/teste/logot.svg"> -->
            </a>
            <!-- Botão hamburguer -->
            <button class="navbar-toggler" data-toggler="collapse" data-target="menu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ml-md-auto text-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="#">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CADASTRAR PRODUTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CADASTRAR FUNCIONARIOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fim Menu -->

    <!-- Inicio Header -->

    <header>
        <div class="container">
            <div class="row">
                <!-- Monitor grande ocupa col 5, monitor pequeno col 12 (ocupa toda a tela) -->
                <!-- Conteúdo texto -->
                <div class="col-lg-5 col-12 text-light jumbotron bg-transparent">
                    <h1>Panificadora Cabral</h1>
                    <p>
                        O que é Lorem Ipsum?
                        Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
                    </p>

                </div>

                <!-- Carrosel -->
                <div class="col-lg-7 col-12">
                    <div id="img-home" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#img-home" data-slide-to="0" class="active"></li>
                            <li data-target="#img-home" data-slide-to="1"></li>
                            <li data-target="#img-home" data-slide-to="2"></li>
                        </ol>
                        <!-- Interior do carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/padaria.jpg">
                            </div>

                            <div class="carousel-item">
                                <img class="img-fluid" src="img/padaria2.jpg">
                            </div>

                            <div class="carousel-item">
                                <img class="img-fluid" src="img/paodequeijo.jpg">
                            </div>


                        </div>


                    </div>

                </div>

            </div>
        </div>
    </header>
    <!-- Fim Header -->