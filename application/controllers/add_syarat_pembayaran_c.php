<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_syarat_pembayaran_c extends CI_Controller {

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
		if($this->input->post('antara')){
			$msg = 1;
			$antara = $this->input->post('antara');
			$diskon = $this->input->post('diskon');
			$tempo = $this->input->post('tempo');
			$keterangan = $this->input->post('keterangan');
			$nama	= $diskon.'/'.$antara.' n/'.$tempo;

			$this->db->query("
				INSERT INTO ak_syarat_pembayaran
				(NAMA,MEMBAYAR_ANTARA,DISKON,JATUH_TEMPO,KETERANGAN,STATUS)
				VALUES 
				('$nama','$antara', '$diskon','$tempo','$keterangan','0')
			");
		}
		$data_item = $this->db->query("SELECT * FROM ak_syarat_pembayaran ORDER BY ID DESC")->result();

		$data = array(
			'page' => 'add_syarat_pembayaran_v',
			'data_item' => $data_item, 
			'msg' => $msg,
			'master' => '', 
			'view' => '', 
			'title' => 'Syarat pembayaran', 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */