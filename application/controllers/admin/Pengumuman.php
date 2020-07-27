<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

	protected $kategori = 3;

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
		$this->load->model('admin/Pengumuman_model');
	}

	public function index()
	{
		$data['notice_data'] = $this->Pengumuman_model->getPengumuman();
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/pengumuman', $data);
		$this->load->view('admin/tempelate/footer');

	}

	public function tambah()
	{
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_pengumuman');
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Pengumuman_model->upload())
			{
				redirect('admin/pengumuman');
			} else {
				redirect('admin/pengumuman/tambah');
			}
		}
	}

	public function ubah($id='')
	{
		$data['notice_data'] = $this->Pengumuman_model->getPengumumanById(strtoupper($id));
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_pengumuman', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Pengumuman_model->ubah($id))
			{
				redirect('admin/pengumuman');
			}
		}
	}

	public function hapus($id='')
	{
		$this->Pengumuman_model->hapus(strtoupper($id));
		redirect('admin/pengumuman');
	}


}
?>
