        <div class="main-content-inner">
            <div class="container">
                <div class="row">
				<!-- form de cadastro de material -->
                <div class="col-12">
				<div class="card">
					<div class="card-body">
                        <?php if( isset($tipo) ){ ?>
                        <div class="form-gp">
                            <p class="alert alert-<?php print $tipo; ?>">
                                <?php print $msg; ?></p>
                        </div>
                        <?php } ?>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col" colspan="4">Dados do Usuário</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="4">
                                                <img class="rounded" height="100px"  width="75px"
                                                    src="https://suap.ifrn.edu.br<?= $usuario['foto']; ?>" alt="avatar">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Matricula
                                            </th>
                                            <td>
                                                <?= $usuario['matricula']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Nome Usual
                                            </th>
                                            <td>
                                                <?= $usuario['nome_usual']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                E-mail
                                            </th>
                                            <td>
                                                <?= $usuario['email']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <h4 class="header-title">Atualizar perfil</h4>
                        <form method="POST" 
                            action="?/painel/atualizar_usuario/<?= $usuario['matricula']; ?>">
                            <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" value="0" id="tipo0" name="tipo"
                                    <?php $usuario['tipo'] == 0 ? print 'checked' : ''; ?>
                                    class="custom-control-input">
                                <label class="custom-control-label" for="tipo0">Aluno (tipo 0)</label>
                            </div>

                            <div class="custom-control custom-radio">
                                <input type="radio" value="1" id="tipo1" name="tipo" 
                                    <?php $usuario['tipo'] == 1 ? print 'checked' : ''; ?>
                                    class="custom-control-input">
                                <label class="custom-control-label" for="tipo1">Coordenador (tipo 1)</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" value="2" id="tipo2" name="tipo" 
                                    <?php $usuario['tipo'] == 2 ? print 'checked' : ''; ?> 
                                    class="custom-control-input">
                                <label class="custom-control-label" for="tipo2">Coordenador Chefe (tipo 2)</label>
                            </div>
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
        <!-- main content area end -->
