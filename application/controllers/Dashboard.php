<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$this->load->view('template/header_template');
		$this->load->view('template/sidebar_template');
		$this->load->view('template/topbar_template');
		$this->load->view('content_view');
		$this->load->view('template/footer_template');
	}
}
