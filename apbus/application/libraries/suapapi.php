<?php

class Suapapi{
	private $urlbase = "https://suap.ifrn.edu.br:443/api/v2/";

	private $ch;

	function __construct(){
		$this->ch = curl_init();
		curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		// curl_setopt($ch, CURLOPT_VERBOSE, TRUE);
	}

	public function autentica($username, $password){
		$ret = null;
		curl_setopt($this->ch, CURLOPT_URL, ($this->urlbase)."autenticacao/token/?format=json");
		curl_setopt($this->ch, CURLOPT_POST, 1);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($this->ch, CURLOPT_POSTFIELDS,
			'{"username":"'.$username.'",
			  "password":"'.$password.'"}');

		$result = curl_exec($this->ch);
		if($result){
			$r = json_decode($result);
			if( isset($r->token) )
				$ret = $r->token;
		}
		return $ret;		
	}

	public function reflesh($token){
		$ret = null;
		curl_setopt($this->ch, CURLOPT_URL, ($this->urlbase)."autenticacao/token/reflesh/");
		curl_setopt($this->ch, CURLOPT_POST, 1);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($this->ch, CURLOPT_POSTFIELDS,'{"token":"'.$token.'"}');
		$result = curl_exec($this->ch);
		if($result){
			$r = json_decode($result);
			$ret = $r->token;
		}
		return $ret;
	}

	public function getMeusDados($token){
		$ret = null;
		curl_setopt($this->ch, CURLOPT_URL, $this->urlbase."minhas-informacoes/meus-dados/");
		curl_setopt($this->ch, CURLOPT_POST, 0);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array("Authorization: JWT ".$token));
		$result = curl_exec($this->ch);
		if($result){
			$ret = json_decode($result);
		}
		return $ret;
	}

	public function getAluno($token, $matricula){
		// https://suap.ifrn.edu.br/api/v2/20141084010200/
		$ret = null;
		curl_setopt($this->ch, CURLOPT_URL, $this->urlbase."edu/alunos/".$matricula);
		curl_setopt($this->ch, CURLOPT_POST, 0);
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array("Content-type: application/json"));
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, array("Authorization: JWT ".$token));
		$result = curl_exec($this->ch);
		if($result){
			$ret = json_decode($result);
		}
		return $ret;
	}

	public function execute($args = array()){
		$ret = null;

		if( !isset($args) || empty($args) ){
			$ret = json_decode(
					array('status' => 'error', 'Sem parametros necessários')
				);
		} else {
			curl_setopt($this->ch, CURLOPT_URL, $this->urlbase.$args['METHOD']);
			curl_setopt($this->ch, CURLOPT_POST, 0);
			curl_setopt($this->ch, CURLOPT_HTTPHEADER,
				array("Content-type: application/json"));
			curl_setopt($this->ch, CURLOPT_HTTPHEADER,
				array("Authorization: JWT ".$args['TOKEN']));
			$result = curl_exec($this->ch);
			if($result){
				$ret = json_decode($result);
			}
		}
		return $ret;
	}

	public function close(){
		curl_close($ch);
	}
}

?>


									
									
									