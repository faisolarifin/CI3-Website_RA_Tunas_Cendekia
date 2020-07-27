<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {

		public function index()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/login');

			} else {
				$username = $this->input->post('username', true);
				$password = $this->input->post('password', true);
				$auth = $this->db->get_where('user', ['username' => $username, 'password' => $password])->row();
				if ($auth != null)
				{
					$data = array(
						'id'  => $auth->id_user,
						'nama'     => $auth->nama
					);
					$this->session->set_userdata($data);
					redirect('admin/home');
				}  else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username atau Password Salah, Silahkan login kembali !</div>');
					redirect('auth');
				}
			}

		}

		public function logout()
		{
			$array_items = array('id', 'nama');
			$this->session->unset_userdata($array_items);
			redirect('auth');
		}

	}

?>
