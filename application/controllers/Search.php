<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Search extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$header['header'] = 'RA Tunas Cendekia - Pencarian '.$this->input->get('keyword', true);
			$data['top_data'] = $this->Landing_model->getTopViews(5);
			$data['berita_data'] = $this->Landing_model->getPostLimit(2, 5);
			$data['artikel_data'] = $this->Landing_model->getPostLimit(4, 5);
			$data['posting_data'] = $this->Landing_model->getSearchPost($this->input->get('keyword', true));
			$this->load->view("tempelate/header", $header);
			$this->load->view("pencarian", $data);
			$this->load->view("tempelate/footer");
		}


	}
?>
