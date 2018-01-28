<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pencatatan_gaji_c extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$msg = 0;
		

		$data_akun = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID DESC")->result();
		$data_cabang = $this->db->query("SELECT * FROM ak_cabang ORDER BY ID DESC")->result();
		$data_departemen = $this->db->query("SELECT * FROM ak_departemen ORDER BY ID DESC")->result();
		$data_pelanggan = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();
		$data_karyawan = $this->db->query("SELECT * FROM ak_karyawan ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'pencatatan_gaji_v',
			'data_akun' => $data_akun, 
			'data_cabang' => $data_cabang, 
			'data_departemen' => $data_departemen, 
			'data_pelanggan' => $data_pelanggan, 
			'data_karyawan' => $data_karyawan, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Proyek', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */