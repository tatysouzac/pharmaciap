<?php
?>


<section class="herois">
    <div class="container">

        <div class="contato-titulo">
            <div class="row clearfix">
                <div class="col-md-6">
                    <h1>Categorias</h1>
                </div>
            <?php if($this->session->userdata("usuario_logado")) : ?>
                <div class="col-md-6">
                        <a href="categorias/formulario"><button class="btn btn-danger" style="float: right">Cadastrar Nova Categoria</button></a>
                </div>

            <?php endif; ?>
        </div>

        <hr class="contato-hr">
            <p class="descricao-contato">Listagem completa de categorias.</p>

            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>
    </div>

        <div class="profutos-page">
            <table class="table table-dark">
                <tr>
                    <th>Nome da Categoria</th>
                </tr>
                
                <tr>
                    <td>Nenhuma categoria</td>
                </tr>
            </table>
        </div>
    </div>
</section>

