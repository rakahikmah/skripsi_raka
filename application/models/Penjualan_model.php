<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan_model extends CI_Model {

	public function insertPenjualan($data)
	{
		return $this->db->insert('tbl_penjualan',$data);
	}

}

/* End of file Penjualan_model.php */
/* Location: ./application/models/Penjualan_model.php */