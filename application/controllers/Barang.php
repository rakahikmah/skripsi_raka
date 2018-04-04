
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function index()
	{
		$data['databarang'] = $this->barang_model->tampilbarang();

		$this->load->view('admin/header_v');
		$this->load->view('admin/sidebar_v');
		$this->load->view('barang/databarang_v',$data);
		$this->load->view('admin/footer_v');
	}

	public function addbarang()
	{

		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
	 	$this->form_validation->set_rules('harga_barang', 'harga_barang', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			$data['kodebarang'] = $this->kode_model->getKodeBarang();
			
			$this->load->view('admin/header_v');
			$this->load->view('admin/sidebar_v');
			$this->load->view('barang/formtambahbarang_v',$data);
			$this->load->view('admin/footer_v');
		} else {
			$data = array (
				'id_barang' => $this->input->post('id_barang'),
				'nama_barang' => $this->input->post('nama_barang'),
				'harga_barang'=> substr(str_replace(".","",$this->input->post('harga_barang')),3)
			);
			
			$this->barang_model->addbarang($data);

			$this->session->set_flashdata('infotambah', 'true');
			redirect('barang');
		}
	}

	public function updatebarang($id_barang)
	{
		$this->form_validation->set_rules('nama_barang', 'nama_barang', 'trim|required');
	 	$this->form_validation->set_rules('harga_barang', 'harga_barang', 'trim|required');

	 	
		if ($this->form_validation->run() == FALSE) {
	 		$data['barang'] = $this->barang_model->tampildetailbarang($id_barang);

			$this->load->view('admin/header_v');
			$this->load->view('admin/sidebar_v');
			$this->load->view('barang/formubahbarang_v',$data);
			$this->load->view('admin/footer_v');
		} else {
			$data = array (
				'nama_barang' => $this->input->post('nama_barang'),
				'harga_barang'=> substr(str_replace(".","",$this->input->post('harga_barang')),3)
			);
			
			$this->barang_model->updatebarang($id_barang,$data);
			$this->session->set_flashdata('infoupdate', 'true');
			redirect('barang');
		}
	}

	public function hapusbarang($id_barang)
	{
		$this->barang_model->hapusbarang($id_barang);
		$this->session->set_flashdata('infohapus','true');
		redirect('barang');
	}

}

/* End of file Barang.php */
/* Location: ./application/controllers/Barang.php */

