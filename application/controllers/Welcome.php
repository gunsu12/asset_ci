<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
	    parent::__construct();
	    $this->load->model('m_asset');
	    $this->load->model('m_log');
	}

	public function index()
	{
		$this->load->view('welcome');
	}

	public function page_notfound()
	{
		$data['page_title'] = "Oppss.. terjadi kesalahan";
		$data['page_tree'] = "404";
		$data['page_menu'] = "404";

		$this->load->view('404', $data);
	}
}
