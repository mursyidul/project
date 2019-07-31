<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Model_login');
	}

	public function index(){
		$this->load->view('dashboard');
	}


	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
