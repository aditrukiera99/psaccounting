<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengiriman_c extends CI_Controller {


	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$sql = " DELETE FROM ak_pengiriman WHERE ID = $id"; 
            $this->db->query($sql);
		}

		$data_item = $this->db->query("SELECT * FROM ak_pengiriman ORDER BY ID")->result();


		$data = array(
			'page' => 'pengiriman_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'pengiriman', 
			'post_url' => 'pengiriman_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');

			$this->db->query("
				UPDATE ak_pengiriman SET NAMA = '$nama'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_pengiriman WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_pengiriman_v", 
			'title' => "Ubah pengiriman", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'pengiriman_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */