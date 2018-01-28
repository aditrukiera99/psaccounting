<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Syarat_pembayaran_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('syarat_pembayaran_m','model'); 

	}

	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->model->hapus_produk($id);
			
		}

		$data_item = $this->model->get_data_syarat();


		$data = array(
			'page' => 'syarat_pembayaran_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'syarat_pembayaran', 
			'post_url' => 'syarat_pembayaran_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('antara')){
			$msg = 1;
			$antara = $this->input->post('antara');
			$diskon = $this->input->post('diskon');
			$tempo = $this->input->post('tempo');
			$keterangan = $this->input->post('keterangan');
			$nama	= $diskon.'/'.$antara.' n/'.$tempo;

			$this->db->query("
				UPDATE ak_syarat_pembayaran SET MEMBAYAR_ANTARA = '$antara',
									 DISKON = '$diskon',
									 JATUH_TEMPO = '$tempo',
									 KETERANGAN = '$keterangan',
									 NAMA = '$nama'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_syarat_pembayaran WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_syarat_pembayaran_v", 
			'title' => "Ubah syarat_pembayaran", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'syarat_pembayaran_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */