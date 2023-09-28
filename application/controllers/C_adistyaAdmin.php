<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_adistyaAdmin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		

		$this->load->model('M_adistyaAdmin');

		$data['userAccess'] = $this->M_adistyaAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();

		$data['title'] = 'Dashboard Marriot Hotel';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('v_adistyaAdmin',  $data);
		$this->load->view('templates/footer',  $data);
	}

	

	public function room($kamar)
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('M_adistyaAdmin');
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();
		$data['kamar'] = $this->M_adistyaAdmin->get_kamar($kamar)->result_array();
		$data['tipe'] = $kamar;	
		
		$this->load->model('M_adistyaJoin');

		$data['list_kamar']=$this->M_adistyaJoin->ruanganId($kamar)->result_array();
		
		$data['title'] = 'Room Mariiot Hotel';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('v_adistyaRoomAdmin',  $data);
		$this->load->view('templates/footer',  $data);
	}

	public function masterData()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->model('M_adistyaAdmin');

		$data['userAccess'] = $this->M_adistyaAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();


		$data['title'] = 'Master Data Marriot Hotel';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('v_adistyaMasdatAdmin',  $data);
		$this->load->view('templates/footer',  $data);
	}

	// Tipe Kamar
	public function form_tambahKamar()
	{
		$data['user_pengguna'] = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();

		$data['userAccess'] = $this->M_adistyaAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();

		$data['title'] = 'Form Tambah Tipe Kamar';
		$this->load->view('templates/topbar',  $data);
		$this->load->view('templates/sidebar',  $data);
		$this->load->view('v_adistyaFormKamar',  $data);
		$this->load->view('templates/footer',  $data);
	}

	public function fungsi_tambahKamar()
	{
		$tipekamar = $this->input->post('tipekamar');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');

		// Upload File
		$config['upload_path']          = './assets/img';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$upload_img = $this->upload->data('file_name');


		$add = array(
			'nama_kamar' => $tipekamar,
			'fasilitas_kamar' => $fasilitas,
			'tipe_harga' => $harga,
			'tanggal_update' => $tanggal,
			'img' => $upload_img,
		);

		$this->load->model('M_adistyaAdmin');
		$this->M_adistyaAdmin->tambahKamar($add);

		redirect('C_adistyaAdmin/masterData');
	}

	public function fungsi_editKamar($id)
	{
		$tipekamar = $this->input->post('tipekamar');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
		$tanggal = $this->input->post('tanggal');
	

		// Upload File
		$config['upload_path']          = './assets/img/uploads';
		$config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		$this->upload->do_upload('image');
		$upload_img = $this->upload->data('file_name');

		$update = array(
			'nama_kamar' => $tipekamar,
			'fasilitas_kamar' => $fasilitas,
			'tipe_harga' => $harga,
			'tanggal_update' => $tanggal,
			'img' => $upload_img,
		);

		$this->db->where('id', $id);
		$this->db->update('tipe_kamar', $update);

		redirect('C_adistyaAdmin/masterData');
	}

	public function fungsi_deletKamar($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tipe_kamar');
		redirect('C_adistyaAdmin/masterData');
	}
	// Akhir Tipe Kamar

	public function fungsi_editUser($id)
	{
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');

		$update = array(
			'nama' => $nama,
			'level' => $level,
		);

		$this->db->where('id', $id);
		$this->db->update('user_pengguna', $update);
		redirect('C_adistyaAdmin/masterData');
	}

	public function fungsi_deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('user_pengguna');
		redirect('C_adistyaAdmin/masterData');
	}

	

}