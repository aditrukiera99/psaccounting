<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori_pemasok_c extends CI_Controller {



	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->db->query("DELETE FROM ak_kategori_pemasok WHERE ID = '$id'");
			
		}

		$data_item = $this->db->query("SELECT * FROM ak_kategori_pemasok ORDER BY ID")->result();

		$data = array(
			'page' => 'kategori_pemasok_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'Kategori pemasok', 
			'post_url' => 'kategori_pemasok_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$anak_dari	 = $this->input->post('anak_dari');

			$this->db->query("
				UPDATE ak_kategori_pemasok SET NAMA = '$nama',
									 ANAK_DARI = '$anak_dari'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_kategori_pemasok WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_kategori_pemasok_v", 
			'title' => "Ubah Kategori pemasok", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'kategori_pemasok_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */