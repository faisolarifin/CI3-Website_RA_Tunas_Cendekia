<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Infopsb extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$data['top_data'] = $this->Landing_model->getTopViews(5);
			$data['berita_data'] = $this->Landing_model->getPostLimit(2, 5);
			$data['artikel_data'] = $this->Landing_model->getPostLimit(4, 5);
			$data['v_data'] = $this->Landing_model->getPostedById('profile-path');
			$this->load->view("tempelate/header");
			$this->load->view("infopsb", $data);
			$this->load->view("tempelate/footer");
		}

	}
?>
