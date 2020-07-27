<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile_model extends CI_Model {

		private $config =  array('upload_path' => './uploads/posted/', 'allowed_types' => 'gif|jpg|png');

		public function ubah($id)
		{
			$this->load->library('upload', $this->config);
			if (!empty($_FILES['gambar']['name']))
			{
				$this->upload->do_upload('gambar');
				$img = $this->getProfileById($id)->gambar;
				//hapus gambar
				unlink(FCPATH.'uploads/berita/'.$img);
				$this->db->set('gambar', $this->upload->data('file_name'));
			}
			$this->db->set('judul', $this->input->post('judul'));
			$this->db->set('isi_post`', $this->input->post('isi'));
			$this->db->set('tgl_post',  date('Y-m-d H:i:s'));
			$this->db->where('id_post', $id);
			$this->db->update('posted');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Profile berhasil diubah!</div>');
			return true;
		}

		public function getProfileById($id)
		{
			$this->db->where('id_post', $id);
			return $this->db->get("posted")->row();
		}

	}
?>
