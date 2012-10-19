<?php

class Main extends CI_Controller {
	
	function Main() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index() {
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view('main_view', $data);
	}
	
	function services () {
		$data['title'] = "List of Services";
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view('main_view', $data);
	}
}
