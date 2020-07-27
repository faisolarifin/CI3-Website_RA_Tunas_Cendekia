<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
		$this->load->model('admin/Slider_model');
	}

	public function index()
	{
		$data['slider_data'] = $this->Slider_model->getAllSlider();
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/slider', $data);
		$this->load->view('admin/tempelate/footer');
	}

	public function tambah()
	{
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_slider');
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Slider_model->upload())
			{
				redirect('admin/slider');
			} else {
				redirect('admin/slider/tambah');
			}
		}
	}

	public function ubah($id='')
	{
		$data['slider_data'] = $this->Slider_model->getSliderById(strtoupper($id));
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_slider', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Slider_model->ubah(strtoupper($id)))
			{
				redirect('admin/slider');
			} else {
				redirect('admin/slider/ubah/'.$id);
			}
		}
	}

	public function hapus($id='')
	{
		$this->Slider_model->hapus(strtoupper($id));
		redirect('admin/slider');
	}



}
?>
