<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
		$this->load->model('admin/Galery_model');

	}

	public function index()
	{
		$data['galery_data'] = $this->Galery_model->getAllGalery();
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/galery', $data);
		$this->load->view('admin/tempelate/footer');
	}

	public function tambah()
	{
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_galery');
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Galery_model->upload())
			{
				redirect('admin/galeri');
			} else {
				redirect('admin/galeri/tambah');
			}
		}
	}

	public function ubah($id='')
	{
		$data['galery_data'] = $this->Galery_model->getGaleryById(strtoupper($id));
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_galery', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Galery_model->ubah(strtoupper($id)))
			{
				redirect('admin/galeri');
			}
		}
	}

	public function hapus($id='')
	{
		$this->Galery_model->hapus(strtoupper($id));
		redirect('admin/galeri');
	}




}
?>
