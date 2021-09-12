<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <?php if( isset($onibus_id) ){ ?>
                <div class="form-gp">
                    <p class="alert alert-<?php print $onibus_id; ?>">
                        <?php print $msg; ?></p>
                </div>
                <?php } ?>

                <h4 class="header-title">Atualizar Onibus</h4>
                <form method="POST" 
                    action="?/painel/atualizar_onibus">
                    <div class="form-group">
                    <?php
                            foreach($onibus as $b){ 
                    ?>
                    <div class="custom-control custom-radio">
                        <input type="radio" value="<?= $b['id']; ?>" id="<?= $b['id']; ?>" name="onibus_id"
                            <?php $usuario['onibus_id'] == $b['id'] ? print 'checked' : ''; ?>
                            class="custom-control-input">
                        <label class="custom-control-label" for="<?= $b['id']; ?>"><?= $b['motorista']; ?></label>
                    </div>
                    <?php } ?>
                    </div>
                    <div class="form-group">
                    <input type="submit" value="Atualizar" class="form-control">
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

