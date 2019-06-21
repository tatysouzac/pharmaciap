<?php

?>
<section class="page-content">
    <div class="container">
        <div class="row"><hr>
            <div class="col-md-12" style="margin-top: 35px; color: #86817D">
                <div class="jumbotron" style="background-color: #1111;">
                    <h2>Entrar</h2>
                    <form action="login/logar" method="post">

                        <div class="form-group">
                            <label for="matricula">Nome de Usuário</label>
                            <!-- required = campo nunca poderá ser vazio -->
                            <input required type="text" name="matricula" id="matricula" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <!-- required = campo nunca poderá ser vazio -->
                            <input required type="password" name="senha" id="senha" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-danger">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>