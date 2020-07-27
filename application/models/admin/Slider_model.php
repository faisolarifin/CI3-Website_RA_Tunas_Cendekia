<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Slider_model extends CI_Model {

		private $config =  array('upload_path' => './uploads/slider/', 'allowed_types' => 'gif|jpg|png', 'min_width' => '1910', 'min_height' => '1070', 'max_width' => '1930', 'max_height' => '1090');

		private function _autocode()
		{
			$this->db->select_max('id_slide');
			$code = (int) substr($this->db->get('slider')->row()->id_slide, 3) + 1;
			return 'SLD'.sprintf("%03s", $code);
		}

		public function getAllSlider()
		{
			$this->db->order_by('id_slide', 'DESC');
			return $this->db->get("slider")->result();
		}

		public function upload()
		{
			$this->load->library('upload', $this->config);

			if ( ! $this->upload->do_upload('gambar'))
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Upload gagal : '.$this->upload->display_errors() .'</div>');
				return false;
			}
			else
			{
				$data = array(
					'id_slide' => $this->_autocode(),
					'h_caption' => $this->input->post('h_caption'),
					'p_caption' => $this->input->post('p_caption'),
					'gambar' => $this->upload->data('file_name')
				);
				$this->db->insert('slider', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diunggah!</div>');
				return true;
			}
		}

		public function ubah($id)
		{
			$this->load->library('upload', $this->config);
			if (!empty($_FILES['gambar']['name']))
			{
				if (! $this->upload->do_upload('gambar'))
				{
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Upload gagal : '.$this->upload->display_errors() .'</div>');
					return false;
				} else {
					$img = $this->getSliderById($id)->gambar;
					//hapus gambar
					unlink(FCPATH . 'uploads/slider/' . $img);
					$this->db->set('gambar', $this->upload->data('file_name'));
				}
			}
			$this->db->set('h_caption', $this->input->post('h_caption'));
			$this->db->set('p_caption', $this->input->post('p_caption'));
			$this->db->where('id_slide', $id);
			$this->db->update('slider');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Slide berhasil diubah!</div>');
			return true;
		}

		public function getSliderById($id)
		{
			$this->db->where('id_slide', $id);
			return $this->db->get("slider")->row();
		}

		public function hapus($id)
		{
			$img = $this->getSliderById($id)->gambar;
			//hapus gambar
			unlink(FCPATH.'uploads/slider/'.$img);
			//hapus dari database
			$this->db->delete('slider', array('id_slide' => $id));
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Slide telah dihapus!</div>');
		}

	}
?>
