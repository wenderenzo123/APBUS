<div class="site-navbar-wrap js-site-navbar bg-white">
  <div class="container">
    <div class="site-navbar bg-light">
      <div class="row align-items-center">
        <div class="col-2">
          <h2 class="mb-0 site-logo"><a href="?/painel/index" class="font-weight-bold">APBUS</a></h2>
        </div>
        <div class="col-10">
          <nav class="site-navigation text-right" role="navigation">
            <div class="container">
              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="?/painel/index">home</a></li>
                <li class="has-children">
                  <?php if ($usuario['tipo']==1 or $usuario['tipo']==2) {?>
                  <a href="#">Cadastros</a>
                  <ul class="dropdown arrow-top">
                    <li><a href="?/painel/cadastro_onibus">Onibus</a></li>
                    <li><a href="?/painel/cadastro_pagamento">Pagamento</a></li>
                    <li><a href="?/painel/cadastro_rota">Rota</a></li>
                    <?php if ($usuario['tipo']==2) {?>
                    <li><a href="?/painel/cadastro_despesa">Despesas</a></li>
                    <li><a href="?/painel/listar_usuarios">Cadastrar Administrador</a></li>
                    <li><a href="?/painel/gerar_boleto">Gere o Boleto</a></li>
                    <?php } ?>
                  </ul>
                  <?php } ?>
                </li>
                <li class="has-children">
                <a href="#">Pagamentos</a>
                  <ul class="dropdown arrow-top">
                  <li><a href="?/painel/cadastro_datapagamentoe">Efetuados</a></li>
                  <li><a href="?/painel/cadastro_datapagamentoatrasado">Atrasados</a></li>
                  <?php if ($usuario['tipo']==1 or $usuario['tipo']==2) {?>
                  <li><a href="?/painel/pagamento_matricula">Por Matrícula</a></li>
                  <li><a href="?/painel/relatorio_mensal">Relatório Mensal</a></li>
                  <?php } ?>
                  </ul>
                </li>
                <li class="has-children">
                <a href="#">Ônibus</a>
                  <ul class="dropdown arrow-top">
                  <li><a href="?/painel/listar_onibus">lista de Onibus</a></li>
                  <li><a href="?/painel/atualizar_onibus">Qual seu onibus?</a></li>
                  </ul>
                </li>
                
                
                <li><a href="?/painel/cadastro_data">Prestação de Contas</a></li>
                <?php if ($usuario['tipo']==0) {?>
                <li><a href="?/painel/cadastro_datapagamento">Meus Pagamentos</a></li>
                <?php } ?>
                <li class="active p-4"><a href="?/"><span>sair</span></a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>