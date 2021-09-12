<!-- viwer-->
<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
             <?php if( isset($tipo) ){ ?>
                <div class="form-gp">
                    <p class="alert alert-<?php print $tipo; ?>">
                        <?php print $msg; ?></p>
                </div>
                <?php } ?>
            <div class="card-body">
                <h4 class="header-title">Pagamento</h4>
                <form action="?/painel/cadastro_pagamento"
                        method="POST">
                    <div class="form-group">
                        <label for="Usuario_matricula">Matricula</label>
                        <input type="text" name="Usuario_matricula" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="data">Data do Pagamento</label>
                        <input type="date" name="data" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Cadastrar</button>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>