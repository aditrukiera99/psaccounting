<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemasok_m extends CI_Model
{
    function __construct() {
          parent::__construct();
          $this->load->database();
    }

    function get_data_pemasok(){
        $sql = "SELECT * FROM ak_pemasok
                            ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

    function hapus_produk($id){
        
            $sql = " DELETE FROM ak_pemasok WHERE ID = $id"; 
            $this->db->query($sql);
        
    }

}

?>