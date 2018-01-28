<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyek_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_proyek(){
        $sql = "SELECT * FROM ak_proyek ORDER BY ID";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_proyek WHERE ID = $id"; 
            $this->db->query($sql);

            $sql2 = " DELETE FROM ak_saldo_proyek WHERE ID = $id"; 
            $this->db->query($sql2);
        
    }

}

?>