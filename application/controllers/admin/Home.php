<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
	}

	public function index()
	{
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/home');
		$this->load->view('admin/tempelate/footer');
	}



}
?>
