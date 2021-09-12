<!-- model -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onibus extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function inserir( $onibus )
	{
		$this->db->insert('Onibus', $onibus);
		return $this->db->insert_id();
	}

	public function listar($id = null)
	{
		if( is_null($id) ){
			$result = $this->db->get('onibus');
			return $result->result_array();
		}
		$result = $this->db
			->get_where('onibus', array(
				'id' => $id));
		return $result->row_array();
			
	}
}
?>