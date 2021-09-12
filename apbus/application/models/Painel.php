<!-- controllers -->
<?php
class Painel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Pagamento');
		$this->load->model('Usuario');
	}

	public function cadastro_pagamento(){
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['matricula'])
				&& !empty($_POST['data'])
				&& !empty($_POST['valor'])
			){
				$pagamento = array(
					'matricula' => $_POST['matricula'],
					'data' => $_POST['data'],
					'valor' => $_POST['valor']
				);
				$id = $this->Pagamento->inserir($pagamento);
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
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro de pagamento'));
			$this->load->view('partes/menu');
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
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro dos Onibus'));
			$this->load->view('partes/menu');
			$this->load->view('form-onibus', $dados);
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
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro das rotas'));
			$this->load->view('partes/menu');
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
			$this->load->view('partes/header',
				array('page_title' => 'APBus - Cadastro das Despesas'));
			$this->load->view('partes/menu');
			$this->load->view('form-despesa', $dados);
			$this->load->view('partes/footer');
	}

	public function listar_onibus(){
		$onibus = $this->onibus->listar();
		$this->load->view('partes/header',
			array('page_title' => 'APBus - Lista de Onibus'));
		$this->load->view('partes/menu');
		$this->load->view('lista-onibus',
			array('onibus' => $onibus));
		$this->load->view('partes/footer');
	}
	

}
?>