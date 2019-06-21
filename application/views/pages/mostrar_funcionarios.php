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
                    <a href="cadastrar_usuarios/index"><button class="btn btn-primary" style="float: right">Cadastrar Funcionario</button></a>
                </div>
                <?php endif; ?>
            </div>
            <hr class="contato-hr">        
            <?php if($this->session->flashdata("success")) : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>

            <?php if($this->session->flashdata("danger")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>

        </div>

        <div class="funcionarios-page">
            <div class="row">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Matricula</th>
      <th scope="col">Senha</th>
      <th scope="col">OPÇOES</th>
    </tr>
  </thead>
  <tbody>
        <?php foreach ($funcionarios as $funcionario) :
    ?>
 <tr>           
      <td><?= $funcionario['id'] ?></td>
      <td><?= $funcionario['nome'] ?></td>
      <td><?= $funcionario['email'] ?></td>
      <td><?= $funcionario['matricula'] ?></td>
      <td><?= $funcionario['senha'] ?></td>
      <td>
        <a href="funcionarios/excluir/<?= $funcionario['id'] ?>">
            <input type="button" name="excluir" value="excluir" class="btn btn-danger">
        </a>
        <a href="funcionarios/editar/<?= $funcionario['id'] ?>">
             <input type="button" name="editar" value="editar" class="btn btn-primary">
        </a>
    </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
 
                
                </div>
               
                <!-- COL 6 // COL 6 // COL 6 // COL 6 // COL 6 // COL 6 //  -->
            </div>
        </div>
    </div>
</section>