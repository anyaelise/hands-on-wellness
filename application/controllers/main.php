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
	
	function services() {
		$data['title'] = "List of Services";
		$data['menu'] = $this->db->get('olb_pages');			
		$data['services'] = $this->db->get('olb_services');
		$this->load->view('services_view', $data);
	}
	
	function booking() {
		$data['title'] = "Make A Reservation";
		$data['menu'] = $this->db->get('olb_pages');		
		$data['services'] = $this->db->get('olb_services');
		$this->load->view('booking_view', $data);
	}
	
	function about() {
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view('about_view', $data);
	}
	
}