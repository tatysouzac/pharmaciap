<?php

?>
<section class="page-content">
    <div class="container">
        <div class="row">
        <hr>
        <div class="col-md-12" style="margin-top: 35px; color: #86817D">
            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>

            <div class="jumbotron" style="background-color: #1111;">
                <h2>Editar Funcionario</h2>
                <form action="funcionarios/enviar_editar" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= isset($id) ? $id : "" ?>">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" value="<?= isset($nome) ? $nome : "" ?>">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" value="<?= isset($email) ? $email : "" ?>">
                    </div>

                    <div class="form-group">
                        <label for="matricula">Matricula</label>
                        <input type="text" name="matricula" id="matricula" class="form-control" value="<?= isset($matricula) ? $matricula : "" ?>">
                    </div>

                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" value="<?= isset($senha) ? $senha : "" ?>">
                    </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>