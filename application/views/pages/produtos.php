<?php

?>

<section class="produtos">
    <div class="container">
        <div class="contato-titulo">
            <div class="row clearfix">
                <div class="col-md-6">
                    <h1>Produtos</h1>
                </div>
                <?php if($this->session->userdata("usuario_logado")) : ?>
                <div class="col-md-6">
                    <a href="produtos/formulario"><button class="btn btn-primary" style="float: right">Cadastrar Novo produto</button></a>
                </div>
                <?php endif; ?>
            </div>
            <hr class="contato-hr">
            <p class="descricao-contato">Listagem de Produtos disponíveis.</p>
        
            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif; ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif; ?>

        </div>

        <div class="produto-page">
            <div class="row clearfix">
                <?php foreach ($produtos as $produto) :
                    // Substituir nomes com espaços por traços -
                    $novoNome = preg_replace('/[ -]+/' , '-' , $produto['nome']);
                    ?>
                <div class="col-md-2">
                    <img src="assets/images/produtos/<?= $produto['nome_imagem'] ?>" alt="" style="width: 100%"><br>
                    <a href="produtos/visualizar/<?= $produto['id']."/".$novoNome ?>"><?= $produto['nome'] ?></a>
                </br>
            </br>
            <?php if($this->session->userdata("usuario_logado")) : ?>
                    <a href="produtos/excluir/<?= $produto['id'] ?>">
                    <input type="button" name="excluir" value="excluir" class="btn btn-danger">

                </a>
                <a href="produtos/editar/<?= $produto['id'] ?>">
                    <input type="button" name="editar" value="editar" class="btn btn-primary">
                </a>
                <?php endif; ?>

                </div>
                <?php endforeach ?>
                <!-- COL 6 // COL 6 // COL 6 // COL 6 // COL 6 // COL 6 //  -->
            </div>
        </div>
    </div>
</section>