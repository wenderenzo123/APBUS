<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this ->load-> library ( 'pagination' );

		$this->load->model('Usuario');
		$this->load->model('Onibus');
		$this->load->model('Pagamento');
		$this->load->model('Despesa');
		$this->load->model('Rota');
	}

	public function listar_usuarios(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$usuarios = $this->Usuario->listar();

		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista de usuarios'));
		$this->load->view('partes/menu', array('usuario' => $usuario));
		$this->load->view('lista-usuarios',
			array('usuarios' => $usuarios));
		$this->load->view('partes/footer');
	}

	public function index()
		{
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				if( !empty($_POST['valor']))
					$ret = $this->Usuario->atualizar_valor($_POST['valor']);
				}

			 
			$usuario = array();
			$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$re = $this->Usuario->listar_valor(); 
			$ret = $this->Usuario->listar_coordenador(); 
			$this->load->view('partes/menu', array('usuario' => $usuario));
			$this->load->view('index', array('re'=>$re,'ret'=>$ret));
			$this->load->view('partes/footer');
		}
		public function about()
		{
			$this->load->view('about');
		}

	public function cadastro_pagamento(){
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['Usuario_matricula'])
				&& !empty($_POST['data'])
			){
				$data = $_POST['data'];
				$separa = explode('-', $data);
				$ano = $separa[0];
				$mes = $separa[1];
				$id = $this->Pagamento->inserir($_POST['Usuario_matricula'], $_POST['data'], $ano, $mes, $_SESSION['user']['matricula']);
				if( $id > 0 ){
					$dados = array(
					'tipo' => 'success',
					'msg' => 'Cadastrado com sucesso!'
				);
				}else{
					$dados = array(
					'tipo' => 'danger',
					'msg' => 'Erro ao cadastrar! Tente novamente.'
				);
				}
			}else{
				$dados = array(
					'tipo' => 'danger',
					'msg' => 'Preencher todos os campos!'
				);
			}
		}
			$usuario = array();
			$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro de pagamento'));
			$this->load->view('partes/menu',array('usuario'=>$usuario));
			$this->load->view('form-pagamento', $dados);
			$this->load->view('partes/footer');
	}

	public function cadastro_onibus(){
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['motorista'])
			){
				$onibus = array(
					'motorista' => $_POST['motorista'],
				);
				$id = $this->Onibus->inserir($onibus);
				if( $id > 0 ){
					$dados = array(
					'tipo' => 'success',
					'msg' => 'Cadastrado com sucesso!'
				);
				}else{
					$dados = array(
					'tipo' => 'danger',
					'msg' => 'Erro ao cadastrar! Tente novamente.'
				);
				}
			}else{
				$dados = array(
					'tipo' => 'danger',
					'msg' => 'Preencher todos os campos!'
				);
			}
		}
			$usuario = array();
			$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro dos Onibus'));
			$this->load->view('partes/menu', array('usuario'=> $usuario));
			$this->load->view('form-onibus', $dados);
			$this->load->view('partes/footer');
	}

	public function pagamento_matricula(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Pagamentos por Matrícula'));
			$this->load->view('partes/menu',array('usuario'=>$usuario));
			$this->load->view('form-alunomatricula');
			$this->load->view('partes/footer');
	}

	public function listar_matricula(){
		$usuario = array();
		$pagamento = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['data']) AND !empty($_POST['matricula'])
			){
				$ano = $_POST['data'];
				$pagamento = $this->Usuario->listarpagamento($ano, $_POST['matricula']);
		}
		}
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Meu Pagamento Efetuado'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('form-alunomatricula', array('pagamento' => $pagamento));
		$this->load->view('partes/footer');
	}
	
	public function cadastro_rota(){
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['local'])
				&& !empty($_POST['hora'])
				&& !empty($_POST['onibus_id'])
			){
				$rota = array(
					'local' => $_POST['local'],
					'hora' => $_POST['hora'],
					'onibus_id' => $_POST['onibus_id']
				);
				$id = $this->Rota->inserir($rota);
				if( $id > 0 ){
					$dados = array(
					'tipo' => 'success',
					'msg' => 'Cadastrado com sucesso!'
				);
				}else{
					$dados = array(
					'tipo' => 'danger',
					'msg' => 'Erro ao cadastrar! Tente novamente.'
				);
				}
			}else{
				$dados = array(
					'tipo' => 'danger',
					'msg' => 'Preencher todos os campos!'
				);
			}
		}
			$usuario = array();
			$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro das rotas'));
			$this->load->view('partes/menu', array('usuario' => $usuario));
			$this->load->view('form-rota', $dados);
			$this->load->view('partes/footer');
	}

	public function cadastro_despesa(){
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['saida'])
				&& !empty($_POST['data'])
				&& !empty($_POST['valor'])
			){
				$despesa = array(
					'saida' => $_POST['saida'],
					'data' => $_POST['data'],
					'valor' => $_POST['valor']
				);
				$id = $this->Despesa->inserir($despesa);
				if( $id > 0 ){
					$dados = array(
					'tipo' => 'success',
					'msg' => 'Cadastrado com sucesso!'
				);
				}else{
					$dados = array(
					'tipo' => 'danger',
					'msg' => 'Erro ao cadastrar! Tente novamente.'
				);
				}
			}else{
				$dados = array(
					'tipo' => 'danger',
					'msg' => 'Preencher todos os campos!'
				);
			}
		}
		
			$usuario = array();
			$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro das Despesas'));
			$this->load->view('partes/menu', array('usuario'=> $usuario ));
			$this->load->view('form-despesa', $dados);
			$this->load->view('partes/footer');
	}

	public function listar_onibus(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$onibus = $this->Onibus->listar();
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista de Onibus'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('lista-onibus',
			array('onibus' => $onibus));
		$this->load->view('partes/footer');
	}

	public function listar_alunosbus( $id ){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$usuarios = $this->Usuario->listarId($id);
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista de alunos do onibus'));
		$this->load->view('partes/menu',array('usuario'=>$usuario));
		$this->load->view('lista-alunosBus',
			array('usuarios' => $usuarios));
		$this->load->view('partes/footer');
	}

	public function listar_paradas( $id ){
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$paradas = $this->Rota->listar($id);
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista de alunos do onibus'));
		$this->load->view('partes/menu',array('usuario'=>$usuario));
		$this->load->view('lista-paradas',
			array('paradas' => $paradas));
		$this->load->view('partes/footer');
	}

	public function cadastro_datapagamento(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Meus Pagamentos'));
			$this->load->view('partes/menu',array('usuario'=>$usuario));
			$this->load->view('form-alunopagamento');
			$this->load->view('partes/footer');
	}

	public function listar_pagamentoaluno(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['data'])
			){
				$ano = $_POST['data'];
				$pagamento = $this->Usuario->listarpagamento($ano,$_SESSION['user']['matricula']);
		}
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Meu Pagamento Efetuado'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('form-alunopagamento', array('pagamento' => $pagamento));
		$this->load->view('partes/footer');
		}
	}

	public function relatorio_mensal(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$recebido['r'] = 1;
		$atrasado['a'] = 2;
		$despesa ['d']= 3;
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['data'])
			){
				$data = $_POST['data'];
				$separa = explode('-', $data);
				$ano = $separa[0];
				$mes = $separa[1];
				$recebido = $this->Pagamento->recebido($ano,$mes);
				$atrasado = $this->Pagamento->atrasado($ano,$mes);
				$despesa = $this->Despesa->despesa($ano,$mes);
		}}	
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Relatório Mensal'));
		$this->load->view('partes/menu',array('usuario'=>$usuario));
		$this->load->view('form-relatorio', array('recebido' => $recebido['r'], 'atrasado' => $atrasado['a'], 'despesa' => $despesa['d']));
		$this->load->view('partes/footer');
	}

	public function atualizar_onibus(){
		$dados = array();
		if( isset($_SESSION['user']['matricula']) ){
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				$ret = $this->Usuario->atualizarOnibus($_SESSION['user']['matricula'], $_POST['onibus_id']);
				if( $ret > 0 ){
					$dados['onibus_id'] = 'success';
					$dados['msg'] = 'Ônibus atualizado com sucesso!';
				}else{
					$dados['onibus_id'] = 'danger';
					$dados['msg'] = 'Erro ao atualizar o Ônibus.';
				}
			}
		}
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$dados['usuario'] = $this->Usuario->listar($_SESSION['user']['matricula']);
		$dados['onibus'] = $this->Onibus->listar();
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Atualizar Onibus'));
		$this->load->view('partes/menu',array('usuario'=>$usuario));
		$this->load->view('form-attonibus', $dados);
		$this->load->view('partes/footer');
	}

	public function listar_despesa(){

$config [ 'base_url' ]  =  'Despesa/p' ;
$config['uri_segment'] = 3; 
$config [ 'total_rows' ]  =  200 ; 
$config [ 'per_page' ]  =  3 ;
$config ['num_links'] = 2;
$config ['page_query_string'] = TRUE;

$this ->pagination->initialize ( $config );


		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['data'])
			){
				$data = $_POST['data'];
				$separa = explode('-', $data);
				$ano = $separa[0];
				$mes = $separa[1];
				$despesa = $this->Despesa->listar($ano,$mes);
		}
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista de Despesas'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('lista-despesa', array('despesa' => $despesa));
		$this->load->view('partes/footer');
		}
		
	}

	public function cadastro_data(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Lista de Despesas'));
			$this->load->view('partes/menu', array('usuario'=>$usuario));
			$this->load->view('form-data');
			$this->load->view('partes/footer');
	}

	public function atualizar_usuario($matricula){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		$dados = array();
		if( isset($matricula) ){
			if($_SERVER['REQUEST_METHOD'] === 'POST'){
				$ret = $this->Usuario->atualizarPermissao($matricula, $_POST['tipo']);
				if( $ret > 0 ){
					$dados['tipo'] = 'success';
					$dados['msg'] = 'Usu&aacute;rio atualizado com sucesso!';
				}else{
					$dados['tipo'] = 'danger';
					$dados['msg'] = 'Erro ao atualizar permissão.';
				}
			}
			$dados['usuario'] = $this->Usuario->listar($matricula);
		}

		$this->load->view('partes/header',
			array('page_title' => 'Apbus - Atualizar usuário'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('form-usuario', $dados);
		$this->load->view('partes/footer');
	}

	public function gerar_boleto(){
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if(!empty($_POST['dt_vencimento'])
				&& !empty($_POST['valor'])
			){
				$id = $this->Usuario->gerarboletos($_POST['dt_vencimento'], $_POST['valor']);
				if( $id > 0 ){
					$dados = array(
					'tipo' => 'success',
					'msg' => 'Cadastrado com sucesso!'
				);
				}else{
					$dados = array(
					'tipo' => 'danger',
					'msg' => 'Erro ao cadastrar! Tente novamente.'
				);
				}
			}else{
				$dados = array(
					'tipo' => 'danger',
					'msg' => 'Preencher todos os campos!'
				);
			}
		}
			$usuario = array();
			$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Gerar Boleto'));
			$this->load->view('partes/menu',array('usuario'=>$usuario));
			$this->load->view('form-boleto', $dados);
			$this->load->view('partes/footer');
	}

	public function cadastro_datapagamentoatrasado(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Pagamentos Pendentes'));
			$this->load->view('partes/menu', array('usuario'=>$usuario));
			$this->load->view('form-dataatraso');
			$this->load->view('partes/footer');
	}

	public function listar_pagamentosatrasados(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['data'])
			){
				$data = $_POST['data'];
				$separa = explode('-', $data);
				$ano = $separa[0];
				$mes = $separa[1];
				$atraso = $this->Pagamento->listarpagamentoatrasado($ano,$mes);
				$lista = array();
				foreach ($atraso as $a) {
					$lista[$a['Usuario_matricula']]['dados'] = $this->Usuario->listar($a['Usuario_matricula']);
				}
		}
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista dos Atrasados'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('lista-pagamentoatrasado', array('lista'=>$lista));
		$this->load->view('partes/footer');
		}
	}

	public function cadastro_datapagamentoe(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Pagamentos Pendentes'));
			$this->load->view('partes/menu', array('usuario'=>$usuario));
			$this->load->view('form-dataefetuado');
			$this->load->view('partes/footer');
	}

	public function listar_pagamentose(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['data'])
			){
				$data = $_POST['data'];
				$separa = explode('-', $data);
				$ano = $separa[0];
				$mes = $separa[1];
				$efetuado = $this->Pagamento->listarpagamentoe($ano,$mes);
				$lista = array();
				foreach ($efetuado as $e) {
					$lista[$e['Usuario_matricula']]['dados'] = $this->Usuario->listar($e['Usuario_matricula']);
				}
		}
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista dos Pagamentos Efetuados'));
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('lista-pagamentoe', array('lista'=>$lista));
		$this->load->view('partes/footer');
		}
	}
	public function listar_valor(){
		$usuario = array();
		$usuario = $this->Usuario->listar($_SESSION['user']['matricula']);
		
		$this->load->view('partes/header');
		$this->load->view('partes/menu', array('usuario'=>$usuario));
		$this->load->view('index', array('re'=>$re));		
		$this->load->view('partes/footer');
	}
}
?>
