<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pengumuman_model extends CI_Model {

		private $config =  array('upload_path' => './uploads/files/', 'allowed_types' => 'docx|xlsx|pdf');

		private function _autocode()
		{
			$this->db->select_max('id_pengumuman');
			$code = (int) substr($this->db->get('pengumuman')->row()->id_pengumuman, 3) + 1;
			return 'NTC'.sprintf("%03s", $code);
		}

		public function getPengumuman()
		{
			$this->db->order_by('id_pengumuman', 'DESC');
			return $this->db->get('pengumuman')->result();
		}

		public function upload()
		{
			$this->load->library('upload', $this->config);

			if ( ! $this->upload->do_upload('files'))
			{
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Upload gagal : '.$this->upload->display_errors() .'</div>');
				return false;
			}
			else
			{
				$url = str_replace(' ', '-', strtolower($this->input->post('perihal')));
				$url = preg_replace('/[^A-Za-z\-]/', '', $url);
				$data = array(
					'id_pengumuman' => $this->_autocode(),
					'id_user' => 1,
					'uni_url' => $url,
					'hal' => $this->input->post('perihal'),
					'simple_info' => $this->input->post('isi'),
					'tgl_post' => date('Y-m-d H:i:s'),
					'file_upload' => $this->upload->data('file_name'),
					'viewer' => 0,
					'count_download' => 0
				);
				$this->db->insert('pengumuman', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diunggah!</div>');
				return true;
			}
		}

		public function ubah($id)
		{
			$this->load->library('upload', $this->config);
			if (!empty($_FILES['files']['name']))
			{
				$this->upload->do_upload('files');
				$img = $this->getPengumumanById($id)->file_upload;
				//hapus gambar
				unlink(FCPATH.'uploads/files/'.$img);
				$this->db->set('file_upload', $this->upload->data('file_name'));
			}
			$this->db->set('hal', $this->input->post('perihal'));
			$this->db->set('simple_info', $this->input->post('isi'));
			$this->db->set('tgl_post',  date('Y-m-d H:i:s'));
			$this->db->where('id_pengumuman', $id);
			$this->db->update('pengumuman');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita berhasil diubah!</div>');
			return true;
		}

		public function getPengumumanById($id)
		{
			$this->db->where('id_pengumuman =', $id);
			return $this->db->get('pengumuman')->row();
		}

		public function hapus($id)
		{
			$img = $this->getPengumumanById($id)->file_upload;
			//hapus gambar
			unlink(FCPATH.'uploads/files/'.$img);
			//hapus dari database
			$this->db->delete('pengumuman', array('id_pengumuman' => $id));
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita telah dihapus!</div>');
		}

	}
?>
