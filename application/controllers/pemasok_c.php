<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pemasok_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('pemasok_m','model'); 

	}


	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$this->model->hapus_produk($id);
			
		}

		$data_item = $this->model->get_data_pemasok();


		$data = array(
			'page' => 'pemasok_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'Data Pemasok', 
			'post_url' => 'pemasok_c',
		);

		$this->load->view('dashboard_v', $data);
	}

	function ubah_data($id=""){

		$msg = 0;

		if($this->input->post('nama_lengkap')){
			$msg = 1;
			$nama_lengkap	 = $this->input->post('nama_lengkap');
			$posisi	 = $this->input->post('posisi');
			$email	 = $this->input->post('email');
			$handphone	 = $this->input->post('handphone');
			$no_rumah	 = $this->input->post('no_rumah');
			$bbm	 = $this->input->post('bbm');
			$web	 = $this->input->post('web');
			$kewarganegaraan	 = $this->input->post('kewarganegaraan');
			$id_pemasok	 = $this->input->post('id_pemasok');
			$tgl_masuk	 = $this->input->post('tgl_masuk');
			$no_ktp	 = $this->input->post('no_ktp');
			$departemen	 = $this->input->post('departemen');
			$status_penjual	 = $this->input->post('status_penjual');
			$catatan	 = $this->input->post('catatan');
			$alamat	 = $this->input->post('alamat');
			$kota	 = $this->input->post('kota');
			$provinsi	 = $this->input->post('provinsi');
			$no_npwp	 = $this->input->post('no_npwp');
			$status_pekerja	 = $this->input->post('status_pekerja');
			$dikenakan_pktp	 = $this->input->post('dikenakan_pktp');
			$status_pktp	 = $this->input->post('status_pktp');

			$this->db->query("
		UPDATE ak_pemasok SET NAMA_LENGKAP = '$nama_lengkap',
							   POSISI = '$posisi',
							   EMAIL = '$email',
							   HANDPHONE  = '$handphone',
							   NO_TELP_RUMAH  = '$no_rumah',
							   BBM  = '$bbm',
							   WEBSITE  = '$web',
							   KEWARGANEGARAAN  = '$kewarganegaraan',
							   ID_pemasok  = '$id_pemasok',
							   TGL_MASUK  = '$tgl_masuk',
							   NO_KTP  = '$no_ktp',
							   DEPARTEMEN  = '$departemen',
							   STATUS_PENJUAL  = '$status_penjual',
							   CATATAN  = '$catatan',
							   ALAMAT  = '$alamat',
							   KOTA  = '$kota',
							   PROVINSI  = '$provinsi',
							   NO_NPWP  = '$no_npwp',
							   STATUS_PEKERJA  = '$status_pekerja',
							   DIKENAKAN_PKTP  = '$dikenakan_pktp',
							   STATUS_PKTP  = '$status_pktp'
								 WHERE ID = '$id'
			");
		}	

		$dt = $this->db->query("SELECT * FROM ak_pemasok WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_pemasok_v", 
			'title' => "Ubah Pemasok", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'pemasok_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */