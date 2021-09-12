<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Despesa extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inserir( $despesa )
	{
		$this->db->insert('Despesa', $despesa);
		return $this->db->insert_id();
	}

	public function listar($ano, $mes)
	{
		$sql = "SELECT * FROM Despesa WHERE YEAR(data)=? AND MONTH(data)=?";
		$ret = $this->db->query($sql, array($ano,$mes));
		return $ret->result_array();
	}

	public function despesa($ano, $mes)
	{
		$sql = "SELECT SUM(valor) as d FROM Despesa WHERE YEAR(data)=? AND MONTH(data)=?";
		$ret = $this->db->query($sql, array($ano,$mes));
		return $ret->row_array();
	}
}
?>