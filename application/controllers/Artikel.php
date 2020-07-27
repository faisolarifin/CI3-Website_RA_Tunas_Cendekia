<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Artikel extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$header['header'] = 'RA Tunas Cendekia - Postingan Artikel Menarik';
			$data['top_data'] = $this->Landing_model->getTopViews(5);
			$data['berita_data'] = $this->Landing_model->getPostLimit(2, 5);
			$data['artikel_data'] = $this->Landing_model->getPostLimit(4, 5);
			$data['posting_data'] = $this->Landing_model->getPosting(4);
			$this->load->view("tempelate/header", $header);
			$this->load->view("artikel", $data);
			$this->load->view("tempelate/footer");

		}

		public function posted($url='')
		{
			$this->Landing_model->setViewer($url);
			$header['header'] = 'RA Tunas Cendekia - '.$this->Landing_model->getPostedById($url)->judul;
			$data['top_data'] = $this->Landing_model->getTopViews(5);
			$data['berita_data'] = $this->Landing_model->getPostLimit(2, 5);
			$data['artikel_data'] = $this->Landing_model->getPostLimit(4, 5);
			$data['v_data'] = $this->Landing_model->getPostedById($url);
			$this->load->view("tempelate/header", $header);
			$this->load->view("views", $data);
			$this->load->view("tempelate/footer");
		}

	}
?>
