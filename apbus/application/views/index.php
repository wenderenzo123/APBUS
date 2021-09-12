<!DOCTYPE html>
<html lang="en">
  <head>
    <title>APBUS &mdash; Sistema de ônibus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="icon" type="image/png" href="public/apbus/images/bus2.png"/>
    <link rel="stylesheet" href="public/apbus/fonts/icomoon/style.css">
    <link rel="stylesheet" href="public/apbus/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/apbus/css/magnific-popup.css">
    <link rel="stylesheet" href="public/apbus/css/jquery-ui.css">
    <link rel="stylesheet" href="public/apbus/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/apbus/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/apbus/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/apbus/css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">  
    <link rel="stylesheet" href="public/apbus/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="public/apbus/css/aos.css">
    <link rel="stylesheet" href="public/apbus/css/style.css">
    <script src="public/apbus/js/graficos/anychart-base.min.js"></script>
    <script src="public/apbus/js/graficos/anychart-exports.min.js"></script>
   <script src="public/apbus/js/graficos/anychart-ui.min.js"></script>
   

<link rel="stylesheet" href="public/apbus/js/graficos/anychart-ui.min.css" />
    
  </head>
  <body style="background-image: url('public/apbus/images/bg.jpg');">
    <div class="site-blocks-cover inner-page overlay" style="background-image: url(public/apbus/images/painel.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-4" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase"><p> Olá, </p>
              <?php echo $_SESSION['user']['nome_usual'];?> </h1>

              <span class="caption d-block text-white">Seja bem-vindo!</span>
            </div>
            <div class="card col-md-4" style="">
              <div class="card-body">
                <h4 class="card-title">Atual Valor a ser pago no ônibus no mês:</h4>
                <?php
                if(!empty($re[0]['valor'])){
                  
                  ?>
                <h1 class="card-text text-primary p-4 display-2 text-center"><td>R$ <?= $re[0]['valor']; ?>,00</p></h1>
                <?php } ?>
                 <?php if ($usuario['tipo']==1 or $usuario['tipo']==2) {?>
                <a data-toggle="collapse" href="#collapse1" href="#" class="btn btn-primary">Atualizar Valor</a>
                <div id="collapse1" class="panel-collapse collapse">
                  <form method="POST" action="?/painel/index">
                    <div class="form-group p-3">
                      <label for="valor">Novo valor:</label>
                      <input type="text" name="valor" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default btn-primary">Adicionar</button>
                  </form>
                   <?php }?>
                  
                </div>
                
              </div>
            </div>
            <div class="card col-4 p-4" style="">
              
                <h4 class="card-title">Coordenadores:</h4>
                
                <h1 class="card-text text-primary display-1 text-center">
                    <script type="text/javascript">
      anychart.onDocumentLoad(function () {
        // Criando uma variavel para o pie chart
        var chart = anychart.pie();
        
        // inserir os dados
        chart.data([

          <?php if(!empty($ret))
                      foreach($ret as $d){ 
                  ?>


          ["<?= $d['nome'] ?>", <?= $d['valor'] ?>],

          <?php } ?>
        ]);
        // Iserindo um titulo ao gráfico
        chart.title("");
        // Definindo o elmento container 
        chart.container("container");
        /* Define o raio interno
        (transforma o gráfico de pizza em um gráfico de rosca).*/
        chart.innerRadius("40%");
        // Inicializa o desenho do gráfico
        chart.draw();
      });
    </script>
     <div id="container" style="width: 320px; height: 390px;"></div>
                  
                </div>
                
              </div>
            </div>

            </div>
            

          </div>
        </div>
      </div> 


    
    
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Boas condutas no ônibus</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Como se comportar</h2>
          </div>
        </div>
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/megaphone.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">SILÊNCIO</h3>
              <p>Faça silêncio e evite inconveniências durante a viagem, garantido a boa convivência no transporte.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/accident.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">PREVENÇÃO</h3>
              <p>Não coloque partes do corpo para fora do veículo e evite acidentes.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/problem.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">CUIDADO</h3>
              <p>Não esteja em pé quando o ônibus estiver em movimento.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/like.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">ZELO</h3>
              <p>Não fique de joelhos na poltrona. Ela foi feita para sentar.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/bell.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">LIMPEZA</h3>
              <p>Não suje nem danifique qualquer parte do ônibus.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/wallet.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">PAGAMENTO</h3>
              <p>Quando estiver próximo do pagamento, procure seu coordenador para realizar o mesmo. Ajude-nos a manter o que conquistamos!</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/school-bus.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">PARADAS</h3>
              <p>O ônibus vai passar apenas uma vez por parada. Consulte a parada mais próxima da sua casa e o horário para não se atrasar.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="display-4 d-block mb-3 text-primary"><img src="public/apbus/images/simbols/handshake.png" style="max-width:50px;max-height:150px; width: auto; height: auto;"></span>
              <h3 class="text-uppercase h4 mb-3">HONESTIDADE</h3>
              <p>Ao encontrar algo perdido que não te pertence, entregue a um dos coordenadores ou ao motorista do ônibus para que eles possam entregar ao dono.</p>
            </div>
          </div>
        </div>
      </div>
    </div>