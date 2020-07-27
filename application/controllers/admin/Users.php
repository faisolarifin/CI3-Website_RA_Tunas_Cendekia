<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
		$this->load->model('admin/Users_model');
	}

	public function index()
	{
		$data['users_data'] = $this->Users_model->getAllUsers();
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/user', $data);
		$this->load->view('admin/tempelate/footer');
	}

	public function tambah()
	{
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_user');
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Users_model->tambah())
			{
				redirect('admin/users');
			}
		}
	}

	public function ubah($id='')
	{
		$data['user_data'] = $this->Users_model->getUsersById(strtoupper($id));
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_user', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Users_model->ubah(strtoupper($id)))
			{
				redirect('admin/users');
			}
		}
	}

	public function hapus($id='')
	{
		$this->Users_model->hapus(strtoupper($id));
		redirect('admin/users');
	}


}
?>
