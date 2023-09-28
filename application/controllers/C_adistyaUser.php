<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_adistyaUser extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_adistyaAdmin');

		$data['userAccess'] = $this->M_adistyaAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();

		$data['title'] = 'Marriot Hotel';
		$this->load->view('v_adistyaUser',  $data);
	}

	public function booking()
	{
		$this->load->model('M_adistyaUser');
		$data['get_user'] = $this->M_adistyaUser->get_user()->row_array();
		$this->load->model('M_adistyaAdmin');
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();
		 

		$data['title'] = 'Booking Room';
		$this->load->view('v_adistyaBooking',  $data);
	}

	public function tambahBooking()
	{
		$data_user = $this->db->get_where('user_pengguna', ['email' => $this->session->userdata('email')])->row_array();
		$chekin = $this->input->post('chekin');
		$chekout = $this->input->post('chekout');
		$tipe_kamar = $this->input->post('tipe_kamar');

		$add = array(
			'tanggal_mulai' => $chekin,
			'tanggal_selesai' => $chekout,
			'tipe_kamar' => $tipe_kamar,
			'username' => $data_user['username'],
			'user_id' => $data_user['id'],
			'kode_booking' => $data_user['id'] . '/' . date('d/m/y')
		);

		$this->load->model('M_adistyaUser');
		$this->M_adistyaUser->userBooking($add);
		redirect('C_adistyaUser/kodeBooking');
	}

	public function kodeBooking()
	{
		$this->load->model('join');
		$data['detailBook'] = $this->join->booking()->result_array();
		$data['detailbook'] = $this->join->booking()->row_array();

		$this->load->model('M_adistyaAdmin');
		$data['userAccess'] = $this->M_adistyaAdmin->userAccess()->result_array();
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();

		$data['title'] = 'Kode Booking';
		$this->load->view('templates/kode', $data);
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function pdf_booking()
	{
		$this->load->model('modeluser');
		$this->load->model('join');
		$data['detailBook'] = $this->join->booking()->result_array(); 
		$data['detailbook'] = $this->join->booking()->row_array(); 
		$this->load->model('adminDa');
		$this->load->model('adminDa');
		$data['userAccess'] = $this->adminda->userAccess()->result_array();
		$data['tipeKamar'] = $this->adminda->tipeKamar()->result_array();  

	}
	public function pdf(){

	
			$this->load->model('join');
			$data['detailBook'] = $this->join->booking()->result_array();
			$data['detailbook'] = $this->join->booking()->row_array();

			$this->load->model('M_adistyaAdmin');
			$data['userAccess'] = $this->M_adistyaAdmin->userAccess()->result_array();
			$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();

	
	$this->load->library('pdf');
	$data['title'] = 'Pdf';

	$this->pdf->setPaper('A4', 'potrait');
	$this->pdf->filename = "booking.pdf";
	$this->pdf->load_view('pdf', $data);
	}

    public function search() 		
    {
        $search = $this->input->get('search');

        if ($search) {
            $this->db->select('*');
            $this->db->from('booking');
            $this->db->or_like('username',$search);
            $this->db->or_like('tipe_kamar',$search);
            $this->db->or_like('kode_booking',$search);
            $this->db->or_like('tanggal_mulai',$search);
            $this->db->or_like('tanggal_selesai',$search);

            $data['detailBook']= $this->db->get()->result_array();

        } else {
            $data['detailBook'] = $this->db->get('booking')->result_array();
        }

        $data['user_pengguna'] = $this->db->get_where('user_pengguna',['email' => $this->session->userdata('email')])->row_array();
        $data['user_info']=$this->M_adistyaAdmin->get_user_info()->row_array();
        $data['jeniskamar'] = $this->M_adistyaAdmin->jeniskamar()->result_array();
		$data['tipeKamar'] = $this->M_adistyaAdmin->tipeKamar()->result_array();
		
        $this->load->model('M_adistyaAdmin');
       
		$data['title'] = 'User Booking';
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('v_adistyaSearch',$data);
        $this->load->view('templates/footer', $data);
	}

}