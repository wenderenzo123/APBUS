<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('suapapi');
		$this->load->model('Usuario');
	}
	public function index (){
		$this->load->view('Login/Login');
	}

	public function login()
	{
		$dados = array();
		if( $_SERVER['REQUEST_METHOD'] === 'POST'){
			if( !empty($_POST['matricula']) && !empty($_POST['senha']) ){
					$suap = new suapapi();
					$token = $suap->autentica($_POST['matricula'], $_POST['senha']);
					if(!is_null($token)){
						$user_data = $suap->getMeusDados($token);
						$nome_usual=array('nome_usual' => $user_data->nome_usual);
						$usuario = array(
							'matricula' => $user_data->matricula,
							'nome_usual' => $user_data->nome_usual,
							'email' => $user_data->email,
							'foto' => $user_data->url_foto_75x100,
							'tipo' => 0,
							'curso' => ($user_data->vinculo)->curso
							);

						$novo = $this->Usuario->listar($user_data->matricula);
						if( !isset($novo) ){
							$this->Usuario->inserir($usuario);
							$novo = $this->Usuario->listar($user_data->matricula);
						}

						$_SESSION['user'] = $usuario;
						$_SESSION['user2'] = $user_data;
						$_SESSION['user3'] = $nome_usual;
						header('Location: ?/painel/index');
					}else{
						$dados = array(
							'tipo' => 'danger',
							'msg' => 'Erro ao atenticar!',
							'page_title' => 'Sistema2V - Login'
						);
					}
			}else{
				$dados = array(
					'tipo' => 'danger',
					'msg' => 'Preencher todos os campos!',
					'title_header' => 'Login',
					'home_header' => '',
					'login_header' => 'active'
				);
			}
		}
		$this->load->view('Login/login', $dados);
	}

}
?>