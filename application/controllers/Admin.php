<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function formorderbarang($id_barang)
	{
		$data['detailbarang'] = $this->barang_model->tampildetailbarang($id_barang);

		$this->load->view('admin/header_v');
		$this->load->view('admin/sidebar_v');
		$this->load->view('admin/formorderbarang_v',$data);
		$this->load->view('admin/footer_v');
	}

	public function orderbarang()
	{
		$data['databarang'] = $this->barang_model->tampilbarang();

		$this->load->view('admin/header_v');
		$this->load->view('admin/sidebar_v');
		$this->load->view('admin/orderbarang_v',$data);
		$this->load->view('admin/footer_v');
	}


	public function tambahcart()
	{
		$data = array(
				'id'      => $this->input->post('id_barang'),
				'qty'     => $this->input->post('jumlah_order'),
				'price'   => $this->input->post('harga_barang'),
				'name'    => $this->input->post('nama_barang'),
		);
		
		$this->cart->insert($data);
		redirect('admin/tampilcart');
	}

	public function tampilcart()
	{
		$total_semua =0;
		$data = $this->cart->contents();

		foreach ($data as $total) {
			$total_semua = $total_semua+$total['subtotal'];
		}
		
		$data['datacart'] = $this->cart->contents();
		$data['total_semua'] = $total_semua;

		$this->load->view('admin/header_v');
		$this->load->view('admin/sidebar_v');
		$this->load->view('admin/cartbarang_v',$data);
		$this->load->view('admin/footer_v');
	}

	public function formubahcart()
	{
		$data['rowid'] = $this->uri->segment(3);
		$data['cart'] = $this->cart->contents();

		$this->load->view('admin/header_v');
		$this->load->view('admin/sidebar_v');
		$this->load->view('admin/formubahcart_v',$data);
		$this->load->view('admin/footer_v');
	}

	public function ubahcart()
	{
		$data = array(
			'rowid' => $this->input->post('rowid'),
			'qty'	=> $this->input->post('jumlah_order')
		);

		$this->cart->update($data);
		redirect('admin/tampilcart');
	}

	public function hapuscart()
	{
		$rowid = $this->uri->segment(3);
		$this->cart->remove($rowid);

		redirect('admin/tampilcart');	
	}

	public function insertcarttopelanggan()
	{

		echo $this->input->post('id_hutang');

		$total_semua =0;
		$datacart = $this->cart->contents();

		$data1 = array(
			'id_hutang'=>$this->input->post('id_hutang'),
			'id_pelanggan'=>$this->input->post('id_pelanggan'),
			'jumlah_hutang'=>$this->input->post('total_hutang'),
			'jatuh_tempo'=>$this->input->post('jatuh_tempo'),
			'kirim_pesan'=>'FALSE'
		);

		$this->hutangpel_model->InsertHutangPel($data1);

		foreach ($datacart as $value) {
			$data2 = array(
				'id_penjualan'=>$this->kode_model->getKodePenjualan(),
				'id_hutang' =>$this->input->post('id_hutang'),
				'id_pelanggan'=>$this->input->post('id_pelanggan'),
				'id_barang'=>$value['id'],
				'barang_terjual'=>$value['qty'],
				'harga_barang'=>$value['price'],
				'tgl_terjual'=>date('Y-m-d')
			);

			$this->penjualan_model->insertPenjualan($data2);
		}

		$this->cart->destroy();
	}



	
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */

