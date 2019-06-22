<?php


?>
<section class="nav-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" );>
        <div class="container">
        <a class="navbar-brand" href="home"><img src="assets/images/logophp.jpeg" height="65px" width="100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="home" style="color: #333333">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produtos" style="color: #333333">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato" style="color: #333333">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="funcionarios" style="color: #333333">Funcionários</a>
                </li>
            </ul>


<!-------------------------------- FAZENDO VERIFICAÇÃO-  SE USUARIO LOGADO MOSTRAR BOTÃO SAIR ------------------------->
            <?php if($this->session->userdata("usuario_logado")) : ?>

                <a href="login/logout" class="btn btn-defalut" style="color: #333333;">Sair</a>
            <?php else : ?>
                <a href="login" class="btn btn-defalut" style="color: #333333;">Login</a>    
                <a href="cadastrar-usuarios" class="btn btn-defalut" style="color: #333333;">cadastrar</a>
            <?php endif ?>
        </div>
        </div>
    
    </nav>
</section>
