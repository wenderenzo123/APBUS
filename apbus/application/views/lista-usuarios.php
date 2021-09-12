<div class="main-content-inner">
    <div class="container">
        <div class="row">
		<!-- form de cadastro de material -->
        <div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Lista de Usuários</h4>
                        <div class="single-table">
                            <div class="table-responsive">
								<table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Telefone</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(!empty($usuarios))
											foreach($usuarios as $u){ 
									?>
                                        <tr>
                                            <td>
                                                <img class="rounded-circle" height="32px"  width="32px"
                                                    src="https://suap.ifrn.edu.br<?= $u['foto']; ?>" alt="avatar">
                                            </td>
                                            <td><?= $u['matricula']; ?></td>
                                            <td><?= $u['nome_usual']; ?></td>
                                            <td><?= $u['email']; ?></td>
                                            <td></td>
                                            <td>
                                                <?php switch ($u['tipo']) {
                                                    case 0:
                                                        print '<span class="status-p bg-secondary">Aluno</span>';
                                                        break;
                                                    case 1:
                                                        print '<span class="status-p bg-success">Coordenador</span>';
                                                        break;
                                                    case 2:
                                                        print '<span class="status-p bg-primary">Coordenador Chefe</span>';
                                                        break;
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                                    <a href="?/painel/atualizar_usuario/<?= $u['matricula']; ?>" class="btn btn-primary rounded text-white px-4">Autorização</a>
                                            </td>
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
			</div>
		</div>
		</div>
		</div>
    </div>
</div>
