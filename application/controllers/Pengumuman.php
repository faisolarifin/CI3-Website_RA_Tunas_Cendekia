<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pengumuman extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			$this->load->model('Landing_model');
		}

		public function index()
		{
			$header['header'] = 'RA Tunas Cendekia - Pengumuman Seputar Tunas Cendikia';
			$data['top_data'] = $this->Landing_model->getTopViews(5);
			$data['berita_data'] = $this->Landing_model->getPostLimit(2, 5);
			$data['artikel_data'] = $this->Landing_model->getPostLimit(4, 5);
			$data['notice_data'] = $this->Landing_model->getPengumuman();
			$this->load->view("tempelate/header", $header);
			$this->load->view("pengumuman", $data);
			$this->load->view("tempelate/footer");
		}

		public function preview($file='')
		{
			$this->Landing_model->setViewerPengumuman($file);
			$file = FCPATH.'uploads/files/'.$file;
			header("Content-Type: application/pdf");
			header("Content-Transfer-Encoding: binary");
			header('Content-Length: ' . filesize($file));
			@readfile($file);
			exit(0);
		}

		public function downloads($file='')
		{
			$this->Landing_model->setDownloadCount($file);
			$file = FCPATH.'uploads/files/'.$file;
			header("Pragma: public");
			header("Expires: 0");
			header("Pragma: no-cache");
			header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");

			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header('Content-disposition: attachment; filename=' . basename($file));

			header("Content-Type: application/pdf");
			header("Content-Transfer-Encoding: binary");
			header('Content-Length: ' . filesize($file));
			@readfile($file);
			exit(0);
		}

	}
?>
