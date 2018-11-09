<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Components extends CI_Controller {

	public function index()
	{
		$this->load->view('header/header');
		$this->load->view('navigation/navigation');
		$this->load->view('main/components');
		$this->load->view('footer/footer');
	}
}
