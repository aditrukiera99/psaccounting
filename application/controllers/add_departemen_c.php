<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_departemen_c extends CI_Controller {

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
		if($this->input->post('nama')){
			$msg = 1;
			$kode = $this->input->post('kode');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('ket');
			$tgl = $this->input->post('tgl');
			$id_akun = $this->input->post('kode_akun');
			$qty = $this->input->post('qty');

			$this->db->query("
				INSERT INTO ak_departemen
				(KODE, DEPARTEMEN , STS , KETERANGAN,TANGGAL_SALDO)
				VALUES 
				('$kode', '$nama','1','$keterangan','$tgl')
			");

			$kode_terakhir_2 = $this->db->insert_id();

			foreach ($id_akun as $key => $value) {
				$this->db->query("
					INSERT INTO ak_saldo_departemen
					(ID_DEPARTEMEN,KODE_AKUN,JUMLAH_SALDO)
					VALUES 
					('$kode_terakhir_2','$id_akun[$key]','$qty[$key]')
				");
			}
		}

		$data_item = $this->db->query("SELECT * FROM ak_departemen ORDER BY ID DESC")->result();
		$data_akun = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_departemen_v',
			'data_item' => $data_item, 
			'data_akun' => $data_akun, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Departemen', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */