<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_proyek_c extends CI_Controller {

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
		if($this->input->post('no_proyek')){
			$msg = 1;
			$no_proyek = $this->input->post('no_proyek');
			$nama = $this->input->post('nama');
			$keterangan = $this->input->post('keterangan');
			$cabang = $this->input->post('cabang');
			$nama_kontak = $this->input->post('nama_kontak');
			$nama_manajer = $this->input->post('nama_manajer');
			$tgl_mulai = $this->input->post('tgl_mulai');
			$tgl_selesai = $this->input->post('tgl_selesai');
			$penyelesaian = $this->input->post('penyelesaian');
			$pelanggan = $this->input->post('pelanggan');
			$tgl_saldo = $this->input->post('tgl_saldo');
			$id_akun = $this->input->post('kode_akun');
			$qty = $this->input->post('qty');

			$this->db->query("
				INSERT INTO ak_proyek
				(NO_PROYEK,NAMA_PROYEK,KET_PROYEK,CABANG,NAMA_KONTAK,NAMA_MANAJER,TANGGAL_MULAI,TANGGAL_SELESAI,PERSEN_PENYELESAIAN,PELANGGAN,TANGGAL_SALDO)
				VALUES 
				('$no_proyek', '$nama','$keterangan','$cabang','$nama_kontak','$nama_manajer','$tgl_mulai','$tgl_selesai','$penyelesaian','$pelanggan','$tgl_saldo')
			");

			$kode_terakhir_2 = $this->db->insert_id();

			foreach ($id_akun as $key => $value) {
				$this->db->query("
					INSERT INTO ak_saldo_proyek
					(ID_PROYEK,KODE_AKUN,JUMLAH_SALDO)
					VALUES 
					('$kode_terakhir_2','$id_akun[$key]','$qty[$key]')
				");
			}
		}

		$data_item = $this->db->query("SELECT * FROM ak_departemen ORDER BY ID DESC")->result();
		$data_akun = $this->db->query("SELECT * FROM ak_kode_akuntansi ORDER BY ID DESC")->result();
		$data_cabang = $this->db->query("SELECT * FROM ak_cabang ORDER BY ID DESC")->result();
		$data_pelanggan = $this->db->query("SELECT * FROM ak_pelanggan ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_proyek_v',
			'data_item' => $data_item, 
			'data_akun' => $data_akun, 
			'data_cabang' => $data_cabang, 
			'data_pelanggan' => $data_pelanggan, 
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