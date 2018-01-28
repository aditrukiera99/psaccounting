<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_karyawan_c extends CI_Controller {

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
			$id_karyawan	 = $this->input->post('id_karyawan');
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
				INSERT INTO ak_karyawan
				(NAMA_LENGKAP,POSISI,EMAIL,HANDPHONE,NO_TELP_RUMAH,BBM,WEBSITE,KEWARGANEGARAAN,ID_KARYAWAN,TGL_MASUK,NO_KTP,DEPARTEMEN,STATUS_PENJUAL,CATATAN,ALAMAT,KOTA,PROVINSI,NO_NPWP,STATUS_PEKERJA,DIKENAKAN_PKTP,STATUS_PKTP)
				VALUES 
				('$nama_lengkap','$posisi','$email','$handphone','$no_rumah','$bbm','$web','$kewarganegaraan','$id_karyawan','$tgl_masuk','$no_ktp','$departemen','$status_penjual','$catatan','$alamat','$kota','$provinsi','$no_npwp','$status_pekerja','$dikenakan_pktp','$status_pktp')
			");
		}
		$data_item = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE KATEGORI = 'EXPS' ORDER BY ID DESC")->result();
		$data_departemen = $this->db->query("SELECT * FROM ak_departemen ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_karyawan_v',
			'data_item' => $data_item, 
			'data_departemen' => $data_departemen, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Add karyawan', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */