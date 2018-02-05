<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barang_jasa_m extends CI_Model
{
    function __construct() {
          parent::__construct();
          $this->load->database();
    }

    function get_data_barang(){
        $sql = "SELECT s.NAMA as NAMA_SATUAN , bj.* 
                    FROM 
                        ak_barang_jasa bj , ak_satuan s 
                            WHERE bj.SATUAN = s.ID 
                            ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_barang_jasa WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>