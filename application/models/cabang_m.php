<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cabang_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_cab(){
        $sql = "SELECT * FROM ak_cabang ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_cabang WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>