<?php

class Main extends CI_Controller {
	
	function Main() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index($page) {
		if(!isset($page)) {
			$data['menu'] = $this->db->get('olb_pages');
			$this->load->view('main_view', $data);
		}
		else {
			changePage($page);
		}
	}
	
	function services() {
		$data['title'] = "List of Services";
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view('services_view', $data);
	}
	
	function changePage($page) {
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view($page.'_view', $data);
	}
}
