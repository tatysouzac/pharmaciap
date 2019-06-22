<?php

?>

<section class="produtos">
    <div class="container">

        <div class="contato-titulo">
            <h1>Editar Produto</h1>
            <hr class="contato-hr">
        </div>

        <?php if($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>

        <?php if($this->session->flashdata("danger")) : ?>
            <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>

        <div >
            <div class="jumbotron" style="background-color: #11111;">
                <?= form_open_multipart('produtos/enviar_editar') ?>

                <div class="form-group">
                    <input type="hidden" name="id" value="<?= isset($id) ? $id : "" ?>">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" class="form-control" name="nome" id="nome" value="<?= isset($nome) ? $nome : "" ?>" required>

                </div>
<!--
                <div class="form-group">
                    <label for="categoria_id">Categoria</label>
                    <select class="form-control" name="categoria_id" id="categoria_id" required>
                        <option value="">Selecione uma opção</option>
                        <?php foreach ($categorias as $categoria) : ?>
                        <option value="<?= $categoria['id'] ?>"><?= $categoria['nome'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                -->

                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" id="preco" cols="30" rows="5" class="form-control" value="<?= isset($preco) ? $preco : "" ?>"required>
                </div>

                <input type="hidden" name="usuario_id" id="usuario_id" value="<?= $this->session->userdata('usuario_logado')['id'] ?>">

                <button class="btn btn-primary">Editar produto</button>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</section>
