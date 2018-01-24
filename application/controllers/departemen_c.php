<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Departemen_c extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	    $this->load->model('departemen_m','model'); 

	}

	public function index()
	{

		$dt = $this->model->get_data_dep();

		$data = array(
			'page' => 'departemen_v', 
			'master' => '', 
			'view' => '', 
			'title' => 'Departemen', 
			'dt' => $dt, 
		);

		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */