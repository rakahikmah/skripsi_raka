<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hutangpel_model extends CI_Model {

	public function insertHutangPel($data)
	{
		return $this->db->insert('tbl_hutang_pel',$data);
	}

}

/* End of file Hutangpel_model.php */
/* Location: ./application/models/Hutangpel_model.php */