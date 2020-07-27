<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users_model extends CI_Model {

		private function _autocode()
		{
			$this->db->select_max('id_user');
			$code = (int) substr($this->db->get('user')->row()->id_user, 3) + 1;
			return 'USR'.sprintf("%03s", $code);
		}

		public function getAllUsers()
		{
			$this->db->order_by('id_user', 'DESC');
			return $this->db->get("user")->result();
		}

		public function tambah()
		{
				$data = array(
					'id_user' => $this->_autocode(),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'username' => $this->input->post('username'),
					'password' => $this->input->post('password')
				);
				$this->db->insert('user', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">User telah ditambahkan!</div>');
				return true;
		}

		public function ubah($id)
		{
			$this->db->set('nama', $this->input->post('nama'));
			$this->db->set('email', $this->input->post('email'));
			$this->db->set('username', $this->input->post('username'));
			$this->db->set('password', $this->input->post('password'));
			$this->db->where('id_user', $id);
			$this->db->update('user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">User berhasil diubah!</div>');
			return true;
		}

		public function getUsersById($id)
		{
			$this->db->where('id_user', $id);
			return $this->db->get("user")->row();
		}

		public function hapus($id)
		{
			$this->db->delete('user', array('id_user' => $id));
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">User telah dihapus!</div>');
		}

	}
?>
