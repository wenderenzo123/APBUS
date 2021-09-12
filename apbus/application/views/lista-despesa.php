<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Lista de Depesa</h4>
                        <div class="single-table">
                            <div class="table-responsive">
								<table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Valor</th>
                                            <th scope="col">Data</th>
                                            <th scope="col">Saida</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(!empty($despesa))
											foreach($despesa as $d){ 
									?>
                                        <tr>
                                            <td><?= $d['id']; ?></td>
                                            <td><?= $d['valor']; ?></td>
                                            <td><?= $d['data']; ?></td>
                                            <td><?= $d['saida']; ?></td>
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                                <?php echo  $this ->pagination-> create_links (); ?>
                
                            </div>
                        </div>
			</div>
		</div>
		</div>
		</div>
    </div>
</div>
