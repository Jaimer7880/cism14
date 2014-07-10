<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers_model extends CI_Model {
	public function__construct()
	{
		$this->load->database();
	}
	
	public function get_customers()
	{
		$query = $this->db->get('test_customers');//returns all data in table
		return $query->result_array();//sends data back as associative array
	}
}

