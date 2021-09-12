<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inserir( $usuario )
	{
		$this->db->insert('Usuario', $usuario);
	}
	
	public function listar($matricula = null)
	{
		if( is_null($matricula) ){
			$result = $this->db->get('Usuario');
			return $result->result_array();
		}
		$result = $this->db
			->get_where('Usuario', array(
				'matricula' => $matricula));
		return $result->row_array();		
	}

	public function gerarboletos( $dt_vencimento, $valor ) 
	{
		$alunos = $this->listar();
		foreach($alunos as $a){
			if ($a['tipo'] == 0) {
				$matricula = $a['matricula'];
				$sql = "insert into pagamento (Usuario_matricula, dt_vencimento, dt_pagamento, valor) VALUES (?, ?, ?, ?)";
				$this->db->query($sql, array($matricula, $dt_vencimento, null, $valor));
			}
		}
		return $id=1;
	}

	public function listarId($onibus_id)
	{
		$result = $this->db
			->get_where('Usuario', array(
				'onibus_id' => $onibus_id));
		return $result->result_array();		
	}
	
	public function excluir($matricula)
	{
		$this->db->trans_begin();
		
		$this->db->delete('usuario',
			array('matricula' => $matricula));

		if ($this->db->trans_status() === FALSE)
		{
			$ret = 0;
		    $this->db->trans_rollback();
		}
		else
		{
			$ret = 1;
		    $this->db->trans_commit();
		}

		return $ret;
	}

	public function atualizarOnibus($matricula, $onibus_id){
		$ret = $this->db->update(
			'usuario', // tabela
			array('onibus_id' => $onibus_id), // novos dados
			array('matricula' => $matricula) // where
		);
		return $ret;
		}

	public function listarpagamento($ano, $matricula)
	{
		$sql = "SELECT * FROM Pagamento WHERE YEAR(dt_vencimento)=? AND Usuario_matricula=?";
		$ret = $this->db->query($sql, array($ano,$matricula));
		return $ret->result_array();
	}
	
	public function atualizarPermissao($matricula, $tipo){
		$ret = $this->db->update(
			'usuario', // tabela
			array('tipo' => $tipo), // novos dados
			array('matricula' => $matricula) // where
		);
		return $ret;
	}
	public function listar_valor(){
			$result = $this->db->get('Valor');
			return $result->result_array();
	}
	public function atualizar_valor($valor){
		$ret = $this->db->update(
			'valor', 
			array('valor' => $valor), 
			array('idvalor' => 0)
		);
		return $ret;
	}
	public function listar_coordenador(){
		$sql = "SELECT u.nome_usual as nome, count(p.id) as valor from pagamento as p, usuario as u where (u.tipo=1 or 2) and u.matricula = p.usuario_coordenador
group by u.matricula; ";
		$ret = $this->db->query($sql);
			return $ret->result_array();
	}
	}
?>