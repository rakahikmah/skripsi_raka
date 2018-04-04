<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function daftarpelanggan()
	{

		$this->form_validation->set_rules("no_identitas", "Nomor Identitas","required|numeric|min_length[16]",array('required' => 'Harap Isi NIK' ));
		$this->form_validation->set_rules("namapel", "Nama pelanggan","required|min_length[4]",array('required' => 'Harap isi Nama Pelanggan' ));
		$this->form_validation->set_rules("no_hp", "No Telepon","required|numeric|min_length[9]",array('required' => 'Harap Isi No Telepon' ));
		$this->form_validation->set_rules("alamat", "Alamat","required|min_length[10]",array('required' => 'Harap Isi Alamat Anda' ));
		$this->form_validation->set_rules("username", "username","required|alpha_numeric|min_length[5]",array('required' => 'harap isi Username anda','alpha_numeric'=>'tidak boleh menggunakan spasi'));
		
		if ($this->form_validation->run() == FALSE) {
			$data['kodepel'] = $this->kode_model->getKodePelanggan();

			$this->load->view('admin/header_v');
			$this->load->view('admin/sidebar_v');
			$this->load->view('user/formdaftarpel_v',$data);
			$this->load->view('admin/footer_v');
		} else {
			$this->user_model->createDataPel();
			echo "oke";
		}

		
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */