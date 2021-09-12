<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Relatório Anual</h4>
					<form action="?/painel/listar_pagamentoaluno" method="POST">
						<label for="data">Data</label>
						<select name="data" id="data" class="browser-default custom-select">
								    <option>Selecione o Ano</option>
								    <?php     
								    for ($i = 2010; $i <= date("Y"); $i++) {
								        echo("<option value='$i'");
								         echo(">$i</option>");
								    }?>
						</select>
						<input type="submit" value="Enviar">
					</form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>

<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Lista de Pagamentos do Ano </h4>
                        <div class="single-table">
                            <div class="table-responsive">
								<table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Data do Vencimento</th>
                                            <th scope="col">Data do Pagamento</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(!empty($pagamento))
											foreach($pagamento as $p){ 
									?>
                                        <tr>
                                            <td><?= $p['Usuario_matricula']; ?></td>
                                            <td><?= $p['valor']; ?></td>
                                            <td><?= $p['dt_vencimento']; ?></td>
                                            <td><?= $p['dt_pagamento']; ?></td>
                                            <?php if( empty($p['dt_pagamento'])){
                                            ?>
                                            <td>Pendente</td>
                                            <?php } ?>
                                            <?php if( !empty($p['dt_pagamento'])){
                                            ?>
                                            <td>Pago</td>
                                            <?php } ?>
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
</body>
</html>