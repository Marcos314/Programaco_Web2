<?php include("cabecalho.php"); ?>

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

<?php include("rodape.php"); ?>