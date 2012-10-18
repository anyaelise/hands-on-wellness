<?php

class Services extends CI_Controller {
	
	function Services() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	function index() {		
		$data['title'] = "List of Services";
		$this->load->view('main_view', $data);
	}	
	
}
