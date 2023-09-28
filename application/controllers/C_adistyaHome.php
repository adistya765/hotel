<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_adistyaHome extends CI_Controller
{
	public function index()
	{
		$data['title'] = 'Marriot Hotel';
		$this->load->view('v_adistyaHome',  $data);
	}
}