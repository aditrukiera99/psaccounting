<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_kategori_pemasok_c extends CI_Controller {

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
			$anak_dari = $this->input->post('anak_dari');

			$this->db->query("
				INSERT INTO ak_kategori_pemasok
				(NAMA,ANAK_DARI)
				VALUES 
				('$nama','$anak_dari')
			");
		}
		$data_item = $this->db->query("SELECT * FROM ak_kategori_pemasok ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_kategori_pemasok_v',
			'data_item' => $data_item, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Kategori pemasok', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */