<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Pendências</h4>
                        <div class="single-table">
                            <div class="table-responsive">
								<table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Nome</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Curso</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $a=0;
                                    if(!empty($lista))
											foreach($lista as $l){ 
                                               
                                                $a=$a+1;
                                                
									?>
                                        <tr>
                                            <td><?= $l['dados']['matricula']; ?></td>
                                            <td><?= $l['dados']['nome_usual']; ?></td>
                                            <td><?= $l['dados']['email']; ?></td>
                                            <td><?= $l['dados']['curso']; ?></td>
                                            <td><p>NÃO PAGO</p></td>
                                        </tr>
									<?php }
                                echo "número de pessoas pendentes: " ,$a;

                                    ?>
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
