<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index()
	{
		$data['title']	= "Informasi ";
		$data['isi']	= "informasi";

		$this->load->view('layout/wrapper', $data);
	}

	public function berita($offset = 0){
		$data['title']	= "Berita ";
		$data['isi']	= "informasi/berita";

		$config['base_url']		= base_url().'informasi/berita/';
		$config['total_rows']	= $this->db->count_all('berita');
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		$this->pagination->initialize($config);
        $data['berita'] = $this->main_model->getDataBerita($config['per_page'], $offset);

		$this->load->view('layout/wrapper', $data);
	}

	public function isi_berita(){
		$berita					= $this->main_model->getDataBerita(FALSE, FALSE, FALSE, $this->uri->segment(4));
		$beritaTerbaru			= $this->main_model->getDataBerita(3, 0);

		$data['title']			= $berita['0']['judul_berita'].' ';
		$data['isi']			= "informasi/berita/isi_berita";
		$data['berita']			= $berita;
		$data['beritaTerbaru'] 	= $beritaTerbaru;

		$this->load->view('layout/wrapper', $data);
	}

	public function guru($offset = 0){
		$data['title']	= "Guru ";
		$data['isi']	= "informasi/guru";

		$config['base_url']		= base_url().'informasi/guru/';
		$config['total_rows']	= $this->db->count_all('guru');
		$config['per_page']		= 3;
		$config['uri_segment']	= 3;
		$config['attributes']	= array('class' => 'pagination-link');

		$this->pagination->initialize($config);
		$data['guru']	= $this->main_model->getDataGuru($config['per_page'], $offset);
		
		$this->load->view("layout/wrapper", $data);
	}

	public function agenda(){
		$data['title'] 	= "Agenda ";
		$data['isi']	= "informasi/agenda";

		$this->load->view('layout/wrapper', $data);
	}

	public function download(){
		$data['title'] 	= "Download ";
		$data['isi']	= "informasi/download";

		$this->load->view("layout/wrapper", $data);
	}
}
