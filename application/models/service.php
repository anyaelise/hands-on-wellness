<?php

class Service extends CI_Model {
	var $name = "";
	var $description = "";
	var $rates = array();
	
	function __construct($name) {
		parent::__construct();
		$this->name = $name;
	}
	
	function get_name() {
		return $this->name;
	}
	
	function get_desc() {
		return $this->description;
	}
	
	function set_desc() {
		$this->db->select('description');
		$this->db->distinct();
		$this->db->where('name', $this->name); 
		$query = $this->db->get('olb_services'); 
		$result = $query->result();
		
		$this->description = $result->name;
	}
	
	function get_rates() {
		return $this->rates;
	}
	
	function set_rates() {
		
	}
	
	
}
