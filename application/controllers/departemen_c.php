<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departemen_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('departemen_m','model'); 

	}

	public function index()
	{

		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->model->hapus_produk($id);
			
		}

		$dt = $this->model->get_data_dep();

		$data = array(
			'page' => 'departemen_v', 
			'master' => '', 
			'view' => '', 
			'title' => 'Departemen', 
			'dt' => $dt, 
			'post_url' => 'departemen_c',
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
				UPDATE ak_cabang SET NAMA = '$nama',
									 ALAMAT = '$alamat',
									 KOTA = '$kota',
									 PROVINSI = '$provinsi'
									 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_cabang WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_cabang_v", 
			'title' => "Ubah Cabang", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'cabang_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}

	function get_akun_info(){
        $id = $this->input->post('id');
        $get_item = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE ID = '$id' ")->row();
        echo json_encode($get_item);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */