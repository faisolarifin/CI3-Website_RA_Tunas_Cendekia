<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Landing_model extends CI_Model {

		public function getSlider()
		{
			$this->db->order_by('id_slide', 'DESC');
			return $this->db->get("slider")->result();
		}

		public function getNewPosting()
		{
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->order_by('posted.id_post', 'DESC');
			return $this->db->get()->result();
		}

		public function getNewNotice()
		{
			$this->db->order_by('id_pengumuman', 'DESC');
			return $this->db->get('pengumuman')->result();
		}

		public function getTopViews($count)
		{
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->where('posted.id_kategori !=', 1);
			$this->db->order_by('posted.viewer', 'DESC');
			$this->db->limit($count);
			return $this->db->get()->result();
		}

		public function getVisiMisi()
		{
			return $this->db->get('visimisi')->result();
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

		public function getPostLimit($type, $count)
		{
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->where('posted.id_kategori =', $type);
			$this->db->order_by('posted.viewer', 'DESC');
			$this->db->limit($count);
			return $this->db->get()->result();
		}

		public function getPostedById($url)
		{
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->join('user', 'user.id_user = posted.id_user');
			$this->db->where('posted.uni_url', $url);
			return $this->db->get()->row();
		}

		public function getAllGalery()
		{
			return $this->db->get('galeri')->result();
		}

		public function getSearchPost($key)
		{
			$this->db->like('posted.judul', $key);
			$this->db->or_like('posted.isi_post', $key);
			$this->db->from('kategori');
			$this->db->join('posted', 'kategori.id_kategori = posted.id_kategori');
			$this->db->join('user', 'user.id_user = posted.id_user');
			$this->db->where('posted.id_kategori !=', 1);
			return $this->db->get()->result();
		}

		public function getPengumuman()
		{
			$this->db->order_by('id_pengumuman', 'DESC');
			return $this->db->get('pengumuman')->result();
		}

		public function setViewer($url)
		{
			$this->db->set('viewer', 'viewer+1', FALSE);
			$this->db->where('uni_url', $url);
			$this->db->update('posted');
		}
		public function setViewerPengumuman($file)
		{
			$this->db->set('viewer', 'viewer+1', FALSE);
			$this->db->where('file_upload', $file);
			$this->db->update('pengumuman');
		}
		public function setDownloadCount($file)
		{
			$this->db->set('count_download', 'count_download+1', FALSE);
			$this->db->where('file_upload', $file);
			$this->db->update('pengumuman');
		}

	}
?>
