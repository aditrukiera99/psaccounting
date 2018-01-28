<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_akun_c extends CI_Controller {

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
		if($this->input->post('tipe')){
			$msg = 1;
			$tipe = $this->input->post('tipe');
			$sub_akun = $this->input->post('sub_akun');
			$kode_akun = $this->input->post('kode_akun');
			$nama = $this->input->post('nama');
			$saldo_awal = $this->input->post('saldo_awal');
			$tgl = $this->input->post('tgl');

			$this->db->where('KODE_AKUN', $kode_akun);
			$cek = $this->db->get('ak_kode_akuntansi')->row();
			 
			
			if(count($cek)>0){
				$msg = 2;
			}else{
			$this->db->query("
				INSERT INTO ak_kode_akuntansi
				(KATEGORI, KODE_AKUN , NAMA_AKUN , ANAK_DARI,SALDO,PER_TANGGAL)
				VALUES 
				('$tipe', '$kode_akun','$nama','$sub_akun','$saldo_awal','$tgl')
			");
		}
		}

		$data_item =  $this->db->get('ak_kode_akuntansi')->result();
		

		$data = array(
			'page' => 'add_akun_v',
			'data_item' => $data_item, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'akun', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */