<?php

class Main extends CI_Controller {
	
	function Main() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	
	function index($page) {
		if(isset($page)) {
			 $data['page'] = $page;
		}
		else {
			$data['page'] = 'about';
		}
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view('main_view', $data);
	}
	
	function services() {
		$data['title'] = "List of Services";
		$data['menu'] = $this->db->get('olb_pages');			
		$data['services'] = $this->db->get('olb_services');
		$this->load->view('services_view', $data);
	}
	
	function booking($status) {
		$data['title'] = "Make A Reservation";
		$data['menu'] = $this->db->get('olb_pages');		
		$data['services'] = $this->db->get('olb_services');
		
		$this->db->group_by('name');
		$data['aromatherapy'] = $this->db->get('olb_aromatherapy');
		
		$this->db->group_by('name');
		$data['music'] = $this->db->get('olb_music');
		
		$this->db->group_by('name');
		$data['draping'] = $this->db->get('olb_draping');
		
		if(isset($status)) {
			if($status == "create") {
				$data['page'] = "booking/validate";
				/*$this->load->view('main_view', $data);
			}
			else if($status == "validate") {*/
				$this->load->library('form_validation');
				$this->form_validation->set_rules('first_name', 'First Name', 'required');
				$this->form_validation->set_rules('last_name', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('phone', 'Telephone number', 'required');
				$this->form_validation->set_rules('address', 'Address', 'required');
				if ($this->form_validation->run() == FALSE) {
					$this->load->view('booking_view', $data);
				}
			}
		}
		else {
			$this->load->view('booking_view', $data);
		}
	}
	
	function about() {
		$data['menu'] = $this->db->get('olb_pages');
		$this->load->view('about_view', $data);
	}
	
}