<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_model extends CI_Model {

	 public function getKodeBarang(){
            $this->db->select("RIGHT(tbl_barang.id_barang,3) AS kode ");
            $this->db->order_by('id_barang', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('tbl_barang');
            if($query->num_rows()>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "BR".$kodemax;
            return $kodejadi;
    }

    public function getKodePenjualan(){
            $this->db->select("RIGHT(tbl_penjualan.id_penjualan,3) AS kode ");
            $this->db->order_by('id_barang', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('tbl_penjualan');
            if($query->num_rows()>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "PJ".$kodemax;
            return $kodejadi;
   }

   public function getKodePelanggan(){
            $this->db->select("RIGHT(tbl_pelanggan.id_pelanggan,3) AS kode ");
            $this->db->order_by('id_pelanggan', 'DESC');
            $this->db->limit(1);
            $query = $this->db->get('tbl_pelanggan');
            if($query->num_rows()>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "PL".$kodemax;
            return $kodejadi;
   }

}

/* End of file Kode_model.php */
/* Location: ./application/models/Kode_model.php */

