<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gaji_c extends CI_Controller {


	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$sql = " DELETE FROM ak_gaji WHERE ID = $id"; 
            $this->db->query($sql);
		}

		$data_item = $this->db->query("SELECT * FROM ak_gaji ORDER BY ID")->result();


		$data = array(
			'page' => 'gaji_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'Data Gaji', 
			'post_url' => 'gaji_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$tipe	 = $this->input->post('tipe');
			$bayar	 = $this->input->post('bayar');
			$akun	 = $this->input->post('akun');

			$this->db->query("
				UPDATE ak_gaji SET NAMA = '$nama',
								   TIPE = '$tipe',
								   BAYAR = '$bayar',
								   AKUN  = '$akun'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_gaji WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_gaji_v", 
			'title' => "Ubah gaji", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'gaji_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */