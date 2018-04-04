<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function tampilbarang()
	{
		$this->db->select('*');
		$this->db->from('tbl_barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tampildetailbarang($id_barang)
	{
		$this->db->select('*');
		$this->db->from('tbl_barang');
		$this->db->where('id_barang',$id_barang);
		$query = $this->db->get();

		return $query->row_array();
	}

	public function addbarang($data)
	{
		return $this->db->insert('tbl_barang',$data);
	}

	public function updatebarang($id_barang,$data)
	{
		$this->db->where('id_barang',$id_barang);
		return $this->db->update('tbl_barang',$data);
	}

	public function hapusbarang($id_barang)
	{
		$this->db->where('id_barang',$id_barang);
		return $this->db->delete('tbl_barang');
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */

