<?php

class Booking extends CI_Controller {
	
	function Booking() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index() {
		$data['title'] = "Make A Reservation";
		$data['menu'] = $this->db->get('olb_pages');
		$data['services'] = $this->db->get('olb_services');
		$this->load->view('booking_view', $data);
	}
}
