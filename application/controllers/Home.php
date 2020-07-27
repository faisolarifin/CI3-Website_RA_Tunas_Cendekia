<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$header['header'] = 'RA Tunas Cendekia - Home Page Official Website';
			$data['slide_data'] = $this->Landing_model->getSlider();
			$data['notice_data'] = $this->Landing_model->getNewNotice();
			$data['top_data'] = $this->Landing_model->getTopViews(3);
			$data['vimi_data'] = $this->Landing_model->getVisiMisi();
			$this->load->view("tempelate/header", $header);
			$this->load->view("home", $data);
			$this->load->view("tempelate/footer");
		}

	}
?>
