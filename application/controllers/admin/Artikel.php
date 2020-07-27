<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	protected $kategori = 4;

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('id'))
		{
			redirect('auth');
			die;
		}
		$this->load->model('admin/Posting_model');
	}

	public function index()
	{
		$data['berita_data'] = $this->Posting_model->getPosting($this->kategori);
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/posted', $data);
		$this->load->view('admin/tempelate/footer');

	}

	public function tambah()
	{
		$data['kategori_data'] = $this->Posting_model->getKategori();
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_posted', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Posting_model->upload())
			{
				redirect('admin/artikel');
			} else {
				redirect('admin/artikel/tambah');
			}
		}
	}

	public function ubah($id='')
	{
		$data['berita_data'] = $this->Posting_model->getBeritaById(strtoupper($id), $this->kategori);
		$data['kategori_data'] = $this->Posting_model->getKategori();
		$this->load->view('admin/tempelate/header');
		$this->load->view('admin/forms/f_posted', $data);
		$this->load->view('admin/tempelate/footer');
		if ($this->input->post('simpan'))
		{
			if ($this->Posting_model->ubah($id, $this->kategori))
			{
				redirect('admin/artikel');
			}
		}
	}

	public function hapus($id='')
	{
		$this->Posting_model->hapus(strtoupper($id), $this->kategori);
		redirect('admin/artikel');
	}


}
?>
