<!-- view -->
<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php if( isset($tipo) ){ ?>
                <div class="form-gp">
                    <p class="alert alert-<?php print $tipo; ?>">
                        <?php print $msg; ?></p>
                </div>
                <?php } ?>
                <h4 class="header-title">Cadastro dos Onibus</h4>
                <form action="?/painel/cadastro_onibus"
                        method="POST">
                    <div class="form-group">
                        <label for="motorista">motorista</label>
                        <input type="text" name="motorista" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Cadastrar</button>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>