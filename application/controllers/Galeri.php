<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galeri extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$header['header'] = 'RA Tunas Cendekia - Kumpulan Kegiatan Tunas Cendekia';
			$data['top_data'] = $this->Landing_model->getTopViews(3);
			$data['galeri_data'] = $this->Landing_model->getAllGalery();
			$this->load->view("tempelate/header", $header);
			$this->load->view("galeri", $data);
			$this->load->view("tempelate/footer");
		}

	}
?>
