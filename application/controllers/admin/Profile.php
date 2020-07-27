<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
		$this->load->model('admin/Profile_model');
	}

	public function index()
	{
		$data['profile_data'] = $this->Profile_model->getProfileById('ART001');
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/profile', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Profile_model->ubah('ART001'))
			{
				redirect('admin/profile');
			}
		}
	}

}
?>
