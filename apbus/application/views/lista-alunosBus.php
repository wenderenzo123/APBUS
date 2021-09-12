<div class="main-content-inner">
    <div class="container">
        <div class="row">
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

