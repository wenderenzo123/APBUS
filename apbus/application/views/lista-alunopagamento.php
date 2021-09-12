<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Pagamento Efetuado</h4>
                        <div class="single-table">
                            <div class="table-responsive">
								<table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(!empty($pagamento))
											foreach($pagamento as $p){ 
									?>
                                        <tr>
                                            <td><?= $p['Usuario_matricula']; ?></td>
                                            <td><?= $p['valor']; ?></td>
                                            <td><?= $p['dt_pagamento']; ?></td>
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
