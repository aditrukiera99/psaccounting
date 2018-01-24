<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departemen_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

    function get_data_dep(){
        $sql = "SELECT * FROM ak_departemen ORDER BY ID DESC";
        return $this->db->query($sql)->result();
    }

}

?>