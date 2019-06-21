<section class="page-content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <img src="assets/images/pharmacia_logo.jpeg" style="width: 100%;" heigth="80%">
            </div>
            <hr>
            <div class="col-md-12" style="margin-top: 35px; color: #86817D">

                <?php if($this->session->flashdata("success")) : ?>
                    <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
                <?php endif ?>

                <?php if($this->session->flashdata("danger")) : ?>
                    <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
                <?php endif ?>

                <div class="jumbotron" style="background-color: #1111;">
                    <h1 class="display-4">Olá colaborador</h1>
                    <p class="lead">Este é um sistema simples de vendas de uma Farmacia.</p>
                    <hr class="my-4" style="background-color: #e6e6e6">
                    <a class="btn btn-primary btn-lg" href="produtos" role="button">Produtos</a>
                </div>
            </div>

            <hr>

            <div class="col-md-12">
                <h1 style="text-align: center; margin-bottom: 30px; color: #86817D">Últimos Produtos</h1>
                <div class="row clearfix" style="text-align: justify">
                <?php foreach ($produtos as $produto) : ?>
                    <div class="col-md-3" Style="...">
                        <div class="card personagem" style="...">
<!--------------------------------------------------------------- Foto ------------------------------------------------------->
                            <img class="card-img-top" src="assets/images/herois/<?= $produto['nome_imagem'] ?>" alt="Card">
                            <div class="card-body">

<!--------------------------------------------------------------- Nome ------------------------------------------------------->
                                <h5 class="card-title"><?= $produto['nome'] ?></h5>

<!-------------------------------------------------------------- Biografia ------------------------------------------------------->
                                <p class="card-text"><?= character_limiter($produto['biografia'], 100)?></p>
                                <a href="#" class="btn btn-danger"> Visualizar Heroi</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>