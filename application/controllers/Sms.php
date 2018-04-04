<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    public function kirim_sms() {
      $this->load->library('smsgateway');
      $deviceID = 85164;
   	
   	  $jumlahHutang = $this->sms_model->JumlahHutang('HT001');

   	  $hutang   = $jumlahHutang['jumlah_hutang'];
   	  $jatuhtempo =date('d-m-Y',strtotime($jumlahHutang['jatuh_tempo']));

   	  $result = $this->smsgateway->sendMessageToManyNumbers(array('081318284635'), 'halo mamah', $deviceID);
      if (count($result['response']['result']['success']) > 0) {
     	echo "berhasil";
      } else {
      	echo "gagal";
      }
   
    }

    public function reply()
    {
		$data = $this->smsgateway->getMessages();
	    $hasil =  count($data['response']['result']);

	    echo json_encode($data);
	    $this->load->view('admin/footer_v');
    }

	

	public function liatpesan()
	{
		$data = $this->smsgateway->getMessages();
	    $hasil =  count($data['response']['result']);
	    
	    echo "<pre>";
	    echo print_r($data);
	    echo "</pre>";

	    for ($y=0; $y <$hasil ; $y++) { 
	      if ($data['response']['result'][$y]['device_id'] =='85124' AND $data['response']['result'][$y]['status'] =='received') {
	        if ($this->sms_model->CheckIdSudahAda($data['response']['result'][$y]['id']) < 1) {
	            $insertData = array (
	              'id_sms'=>$data['response']['result'][$y]['id'],
	              'pesan_sms'=>$data['response']['result'][$y]['message'],
	              'no_hp'=>$data['response']['result'][$y]['contact']['number'],
	              'status'=>'FALSE',
	            );
	            $this->sms_model->insertPesanSms($insertData);
	        }
	      }
	    }

	
	  
	   $jumlahdata = $this->sms_model->getJumlahPesanFalse();
	   $dataPesanFalse = $this->sms_model->getPesanFalse();
	   
	    if ($jumlahdata > 0 ) {
	      if (count($dataPesanFalse) > 0) {
	        $deviceID = 85124;
	    	$jumlahHutang 	   = $this->sms_model->JumlahHutang($dataPesanFalse[0]['pesan_sms']);
	       
	    	$result = $this->smsgateway->sendMessageToManyNumbers(array($dataPesanFalse[0]['no_hp']), 'testt'.$jumlahHutang['jumlah_hutang'], $deviceID);
		    if (count($result['response']['result']['success']) > 0) {
		     	echo "berhasil";
		    } else {
		      	echo "gagal";
		    }

	        $this->sms_model->ubahstatus($dataPesanFalse[0]['id_sms']);
	      }
	    }
	}

	

}

/* End of file Sms.php */
/* Location: ./application/controllers/Sms.php */