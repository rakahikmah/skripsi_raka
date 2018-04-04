<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms_model extends CI_Model {

	public function CheckIdSudahAda($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_sms');
		$this->db->where('id_sms',$id);
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function insertPesanSms($insertData)
	{
		return $this->db->insert('tbl_sms', $insertData);
	}

	public function ubahstatus($id)
	{
		$data = array(
			'status' =>'TRUE'
		);

		$this->db->where('id_sms',$id);
		$this->db->limit(1);
		return $this->db->update('tbl_sms',$data);
	}

	public function getPesanFalse()
	{
		$this->db->select('*');
		$this->db->from('tbl_sms');
		$this->db->where('status','FALSE');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function JumlahHutang($id_hutang)
	{
		$this->db->select('*');
		$this->db->from('tbl_hutang_pel');
		$this->db->where('id_hutang',$id_hutang);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function getJumlahPesanFalse()
	{
		$this->db->select('*');
		$this->db->from('tbl_sms');
		$this->db->where('status','FALSE');
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->num_rows();
	}

}

/* End of file Sms_model.php */
/* Location: ./application/models/Sms_model.php */