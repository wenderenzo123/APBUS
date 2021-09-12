<script src="public/apbus/js/graficos/anychart-base.min.js"></script>
    <script src="public/apbus/js/graficos/anychart-exports.min.js"></script>
   <script src="public/apbus/js/graficos/anychart-ui.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">  
   <link rel="stylesheet" href="public/apbus/js/graficos/anychart-ui.min.css" />
<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Relatório Mensal</h4>
                <form action="?/painel/relatorio_mensal"
                        method="POST">
                    <div class="form-group">
                        <label for="data">Mês</label>
                        <input type="month" name="data" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Pesquisar</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    anychart.onDocumentReady(function () {

    // data
    var data = [
      ["Recebidos", <?= $recebido ?>],
      ["Atrasados", <?= $atrasado ?>],
      ["Despesas", <?= $despesa ?>]
    ];

    // create a chart
    chart = anychart.vertical();

    // set data
    chart.data(data);

    // set the chart title
    chart.title("Recebidos - Atrasados - Despesas");

    // set the container id
    chart.container("wender");

    // set the padding between column groups
    chart.barGroupsPadding(1);
    // save chart data in csv format
    
    // initiate drawing the chart
    chart.draw();
});
        </script>
        <div id= 'wender' style="
    width: 660px;
    height: 300px; 
    margin: 5px 0 0 250px;"></div>
        </div>

<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Tabela de Valores</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table table-hover progress-table text-center">
                                    <thead class="text-uppercase">
                                        <tr>
                                            <th scope="col">Recebido</th>
                                            <th scope="col">À receber</th>
                                            <th scope="col">Despesas</th>
                                            <th scope="col">Saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php if(isset($recebido)) print $recebido; else print "0"; ?></td>
                                            <td><?php if(isset($atrasado)) print $atrasado; else print "0"; ?></td>
                                            <td><?php if(isset($despesa)) print $despesa; else print "0"; ?></td>
                                            <td><?php if(isset($recebido) or isset($despesa)) print $recebido-$despesa; else print "0";?></td>
                                        </tr>
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
