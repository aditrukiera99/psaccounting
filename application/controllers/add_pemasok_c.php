<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_pemasok_c extends CI_Controller {

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
			$nama = $this->input->post('nama');
			$kategori_barang = $this->input->post('kategori_barang');

			$this->db->query("
				INSERT INTO ak_pemasok
				(NAMA,KATEGORI_BARANG)
				VALUES 
				('$nama','$kategori_barang')
			");
		}

		$data_item = $this->db->query("SELECT * FROM ak_pemasok ORDER BY ID DESC")->result();
		$data_satuan = $this->db->query("SELECT * FROM ak_satuan ORDER BY ID DESC")->result();
		$data_kategori = $this->db->query("SELECT * FROM ak_kategori_pemasok ORDER BY ID DESC")->result();
		$data_cabang = $this->db->query("SELECT * FROM ak_cabang ORDER BY ID DESC")->result();
		$data_syarat_pembayaran = $this->db->query("SELECT * FROM ak_syarat_pembayaran ORDER BY ID DESC")->result();
		$data_hutang = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE KATEGORI = 'Hutang Usaha' ORDER BY ID DESC")->result();
		$data_piutang = $this->db->query("SELECT * FROM ak_kode_akuntansi WHERE KATEGORI = 'Piutang Usaha' ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_pemasok_v',
			'data_item' => $data_item, 
			'data_kategori' => $data_kategori, 
			'data_satuan' => $data_satuan, 
			'data_cabang' => $data_cabang, 
			'data_hutang' => $data_hutang, 
			'data_piutang' => $data_piutang, 
			'data_syarat_pembayaran' => $data_syarat_pembayaran, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Pemasok', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */