<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proyek_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('proyek_m','model'); 

	}

	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->model->hapus_produk($id);
			
		}

		$dt = $this->model->get_data_proyek();


		$data = array(
			'page' => 'proyek_v',
			'dt' => $dt, 
			'master' => '', 
			'view' => '', 
			'title' => 'proyek', 
			'post_url' => 'proyek_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama')){
			$msg = 1;
			$nama	 = $this->input->post('nama');
			$alamat	 = $this->input->post('alamat');
			$kota	 = $this->input->post('kota');
			$provinsi	 = $this->input->post('provinsi');

			$this->db->query("
				UPDATE ak_proyek SET NAMA = '$nama',
									 ALAMAT = '$alamat',
									 KOTA = '$kota',
									 PROVINSI = '$provinsi'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_proyek WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_proyek_v", 
			'title' => "Ubah proyek", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'proyek_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */