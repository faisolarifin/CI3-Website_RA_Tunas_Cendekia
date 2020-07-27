<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Galery_model extends CI_Model {

		private $config =  array('upload_path' => './uploads/galery/', 'allowed_types' => 'gif|jpg|png');

		private function _autocode()
		{
			$this->db->select_max('id_galeri');
			$code = (int) substr($this->db->get('galeri')->row()->id_galeri, 3) + 1;
			return 'GLR'.sprintf("%03s", $code);
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
					'id_galeri' => $this->_autocode(),
					'gambar' => $this->upload->data('file_name'),
					'deskripsi'=> $this->input->post('deskripsi')
				);
				$this->db->insert('galeri', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diunggah!</div>');
				return true;
			}

		}

		public function ubah($id)
		{
			$this->load->library('upload', $this->config);
			if (!empty($_FILES['gambar']['name']))
			{
				$this->upload->do_upload('gambar');
				$img = $this->getGaleryById($id)->gambar;
				//hapus gambar
				unlink(FCPATH.'uploads/galery/'.$img);
				$this->db->set('gambar', $this->upload->data('file_name'));
			}
			$this->db->set('deskripsi', $this->input->post('deskripsi'));
			$this->db->where('id_galeri', $id);
			$this->db->update('galeri');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diubah!</div>');
			return true;
		}

		public function getAllGalery()
		{
			$this->db->order_by('id_galeri', 'DESC');
			return $this->db->get("galeri")->result();
		}

		public function getGaleryById($id)
		{
			$this->db->where('id_galeri', $id);
			return $this->db->get("galeri")->row();
		}

		public function hapus($id)
		{
			$img = $this->getGaleryById($id)->gambar;
			//hapus gambar
			unlink(FCPATH.'uploads/galery/'.$img);
			//hapus dari database
			$this->db->delete('galeri', array('id_galeri' => $id));
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Gambar telah dihapus!</div>');
		}

	}
?>
