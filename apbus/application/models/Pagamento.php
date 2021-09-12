<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagamento extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inserir( $matricula, $dt_pagamento, $ano, $mes )
	{
		$sql = "UPDATE Pagamento SET dt_pagamento=? WHERE YEAR(dt_vencimento)=? AND MONTH(dt_vencimento)=? AND Usuario_matricula=?;";
		$ret = $this->db->query($sql, array($dt_pagamento, $ano, $mes, $matricula));
		return $id=1;
	}

	public function listar($id = null)
	{

		$result = $this->db
			->get_where('Material', array(
				'id' => $id));
		return $result->row_array();
			
	}

	public function listarpagamentoatrasado($ano, $mes)
	{
		$sql = "SELECT * FROM Pagamento WHERE YEAR(dt_vencimento)=? AND MONTH(dt_vencimento)=? AND dt_pagamento IS NULL";
		$ret = $this->db->query($sql, array($ano,$mes));
		return $ret->result_array();
	}

	public function atrasado($ano, $mes)
	{
		$sql = "SELECT SUM(valor) as a FROM Pagamento WHERE YEAR(dt_vencimento)=? AND MONTH(dt_vencimento)=? AND dt_pagamento IS NULL";
		$ret = $this->db->query($sql, array($ano,$mes));
		return $ret->row_array();
	}

	public function listarpagamentoe($ano, $mes)
	{
		$sql = "SELECT * FROM Pagamento WHERE YEAR(dt_vencimento)=? AND MONTH(dt_vencimento)=? AND dt_pagamento IS NOT NULL";
		$ret = $this->db->query($sql, array($ano,$mes));
		return $ret->result_array();
	}

	public function recebido($ano, $mes)
	{
		$sql = "SELECT SUM(valor) as r FROM Pagamento WHERE YEAR(dt_vencimento)=? AND MONTH(dt_vencimento)=? AND dt_pagamento IS NOT NULL";
		$ret = $this->db->query($sql, array($ano,$mes));
		return $ret->row_array();
	}
}
?>



