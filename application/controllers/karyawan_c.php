<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan_c extends CI_Controller {


	public function index()
	{
		
		if($this->input->post('id_hapus')){

			$id   = $this->input->post('id_hapus');

			$sql = " DELETE FROM ak_karyawan WHERE ID = $id"; 
            $this->db->query($sql);
		}

		$data_item = $this->db->query("SELECT * FROM ak_karyawan ORDER BY ID")->result();


		$data = array(
			'page' => 'karyawan_v',
			'data_item' => $data_item, 
			'master' => '', 
			'view' => '', 
			'title' => 'Data karyawan', 
			'post_url' => 'karyawan_c',
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
		UPDATE ak_karyawan SET NAMA_LENGKAP = '$nama_lengkap',
							   POSISI = '$posisi',
							   EMAIL = '$email',
							   HANDPHONE  = '$handphone',
							   NO_TELP_RUMAH  = '$no_rumah',
							   BBM  = '$bbm',
							   WEBSITE  = '$web',
							   KEWARGANEGARAAN  = '$kewarganegaraan',
							   ID_KARYAWAN  = '$id_karyawan',
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

		$dt = $this->db->query("SELECT * FROM ak_karyawan WHERE ID = '$id'")->row();

		$data =  array(
			'page' => "edit_karyawan_v", 
			'title' => "Ubah karyawan", 
			'msg' => $msg,
			'view' => "",
			'dt' => $dt,
			'post_url' => 'karyawan_c/ubah_data/'.$id, 
		);
		
		$this->load->view('dashboard_v', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */