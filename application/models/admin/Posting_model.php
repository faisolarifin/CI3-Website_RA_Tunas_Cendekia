<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Posting_model extends CI_Model {

		private $config =  array('upload_path' => './uploads/posted/', 'allowed_types' => 'gif|jpg|png');

		private function _autocode()
		{
			$this->db->select_max('id_post');
			$code = (int) substr($this->db->get('posted')->row()->id_post, 3) + 1;
			return 'ART'.sprintf("%03s", $code);
		}

		public function getKategori()
		{
			$this->db->where('id_kategori !=', 1);
			return $this->db->get('kategori')->result();
		}

		public function getPosting($type)
		{
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->join('user', 'user.id_user = posted.id_user');
			$this->db->where('posted.id_kategori =', $type);
			$this->db->order_by('posted.id_post', 'DESC');
			return $this->db->get()->result();
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
				$url = str_replace(' ', '-', strtolower($this->input->post('judul')));
				$url = preg_replace('/[^A-Za-z\-]/', '', $url);
				$data = array(
					'id_post' => $this->_autocode(),
					'id_user' => 1,
					'id_kategori' => $this->input->post('kategori'),
					'uni_url' => $url,
					'judul' => $this->input->post('judul'),
					'isi_post' => $this->input->post('isi'),
					'tgl_post' => date('Y-m-d H:i:s'),
					'gambar' => $this->upload->data('file_name'),
					'viewer' => 0
				);
				$this->db->insert('posted', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diunggah!</div>');
				return true;
			}
		}

		public function ubah($id, $type)
		{
			$this->load->library('upload', $this->config);
			if (!empty($_FILES['gambar']['name']))
			{
				$this->upload->do_upload('gambar');
				$img = $this->getBeritaById($id, $type)->gambar;
				//hapus gambar
				unlink(FCPATH.'uploads/posted/'.$img);
				$this->db->set('gambar', $this->upload->data('file_name'));
			}
			$this->db->set('judul', $this->input->post('judul'));
			$this->db->set('id_kategori', $this->input->post('kategori'));
			$this->db->set('isi_post', $this->input->post('isi'));
			$this->db->set('tgl_post',  date('Y-m-d H:i:s'));
			$this->db->where('id_post', $id);
			$this->db->where('id_kategori', $type);
			$this->db->update('posted');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita berhasil diubah!</div>');
			return true;
		}

		public function getBeritaById($id, $type)
		{
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->where('posted.id_post =', $id);
			$this->db->where('posted.id_kategori =', $type);
			return $this->db->get()->row();
		}

		public function hapus($id, $type)
		{
			$img = $this->getBeritaById($id, $type)->gambar;
			//hapus gambar
			unlink(FCPATH.'uploads/posted/'.$img);
			//hapus dari database
			$this->db->delete('posted', array('id_post' => $id, 'id_kategori =' => $type));
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berita telah dihapus!</div>');
		}

	}
?>
