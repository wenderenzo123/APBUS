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
                <h4 class="header-title">Rota</h4>
                <form action="?/painel/cadastro_rota"
                        method="POST">
                    <div class="form-group">
                        <label for="local">Local</label>
                        <input type="text" name="local" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="hora">Hora</label>
                        <input type="text" name="hora" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="onibus_id">Onibus_id</label>
                        <input type="text" name="onibus_id" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Cadastrar</button>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>