<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Akun_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('akun_m','model'); 

	}

	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->model->hapus_produk($id);
			
		}

		$data_item = $this->model->get_data_akun();


		$data = array(
			'page' => 'akun_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'akun', 
			'post_url' => 'akun_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama')){
			$msg = 1;
			$sub_akun	 = $this->input->post('sub_akun');
			$kode_akun	 = $this->input->post('kode_akun');
			$nama	 = $this->input->post('nama');
			$saldo	 = $this->input->post('saldo');
			$tgl	 = $this->input->post('tgl');

			$this->db->query("
				UPDATE ak_kode_akuntansi SET ANAK_DARI = '$sub_akun',
									 KODE_AKUN = '$kode_akun',
									 NAMA_AKUN = '$nama',
									 SALDO = '$saldo',
									 PER_TANGGAL = '$tgl'
									 WHERE ID = '$id'
			");
		}	

		$data_item = $this->model->get_data_akun();

		$dt = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_akun_v", 
			'title' => "Ubah akun", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'akun_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */