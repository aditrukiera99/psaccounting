<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Satuan_c extends CI_Controller {



	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->db->query("DELETE FROM ak_satuan WHERE ID = '$id'");
			
		}

		$data_item = $this->db->query("SELECT * FROM ak_satuan ORDER BY ID")->result();

		$data = array(
			'page' => 'satuan_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'Satuan', 
			'post_url' => 'satuan_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');

			$this->db->query("
				UPDATE ak_satuan SET NAMA = '$nama'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_satuan WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_satuan_v", 
			'title' => "Ubah Satuan", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'satuan_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */