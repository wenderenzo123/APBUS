<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Lista de Onibus</h4>
                        <div class="single-table">
                            <div class="table-responsive">
								<table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Motorista</th>
                                            <th scope="col">Frequentadores</th>
                                            <th scope="col">Paradas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(!empty($onibus))
											foreach($onibus as $b){ 
									?>
                                        <tr>
                                            <td><?= $b['id']; ?></td>
                                            <td><?= $b['motorista']; ?></td>
                                            <td>
                                                    <a href="?/painel/listar_alunosbus/<?= $b['id']; ?>" class="btn btn-primary rounded text-white px-4">Alunos</a>
                                            </td>
                                            <td>
                                                    <a href="?/painel/listar_paradas/<?= $b['id']; ?>" class="btn btn-primary rounded text-white px-4">Click</a>
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

