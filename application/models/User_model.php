<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function createDataPel()
		{
			$data = array (
				'id_pelanggan'=>$this->input->post('kodepel'),
				'no_identitas'=>$this->input->post('no_identitas'),
				'nama_pelanggan'=>$this->input->post('namapel'),
				'alamat'=>$this->input->post('alamat'),
				'no_hp'=>$this->input->post('no_hp'),
				'username'=>$this->input->post('username'),
				'password'=>md5($this->input->post('no_hp')),
			);

			return $this->db->insert('tbl_pelanggan',$data);
		}	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */