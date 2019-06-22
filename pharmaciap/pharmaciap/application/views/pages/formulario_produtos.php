<?php

?>

<section class="produtos">
    <div class="container">

        <div class="contato-titulo">
            <h1>Novo Produto</h1>
            <hr class="contato-hr">
            <p class="descricao-contato">Formulário de Cadastro de produtos.</p>
        </div>

        <?php if($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if($this->session->flashdata("danger")) : ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>

        <div class="heroi-page">
            <div class="jumbotron" style="background-color: #11111;">
                <?= form_open_multipart('produtos/novo') ?>

                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                </div>

                <div class="form-group">
                    <label for="categoria_id">Categoria</label>
                    <select class="form-control" name="categoria_id" id="categoria_id" required>
                        <option value="">Selecione uma opção</option>
                        <?php foreach ($categorias as $categoria) : ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" cols="30" rows="5" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="nome_imagem">Foto</label>
                    <input type="file" class="form-control" name="nome_imagem" id="nome_imagem" required>
                </div>

                <input type="hidden" name="usuario_id" id="usuario_id" value="<?= $this->session->userdata('usuario_logado')['id'] ?>">
                <button class="btn btn-primary">Cadastrar produto</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</section>
