<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$header['header'] = 'RA Tunas Cendekia - Profile Tunas Cendekia';
			$data['top_data'] = $this->Landing_model->getTopViews(5);
			$data['berita_data'] = $this->Landing_model->getPostLimit(2, 5);
			$data['artikel_data'] = $this->Landing_model->getPostLimit(4, 5);
			$data['v_data'] = $this->Landing_model->getPostedById('profile-path');
			$this->load->view("tempelate/header", $header);
			$this->load->view("profile", $data);
			$this->load->view("tempelate/footer");
		}

	}
?>
