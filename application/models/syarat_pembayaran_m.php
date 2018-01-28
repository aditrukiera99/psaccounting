<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat_pembayaran_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_syarat(){
        $sql = "SELECT * FROM ak_syarat_pembayaran ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_syarat_pembayaran WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>