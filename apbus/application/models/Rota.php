<!-- model -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rota extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inserir( $rota )
	{
		$this->db->insert('Rota', $rota);
		return $this->db->insert_id();
	}

	public function listar($onibus_id)
	{
		$result = $this->db
			->get_where('Rota', array(
				'onibus_id' => $onibus_id));
		return $result->result_array();			
	}
}
?>