<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	
	public function index($id = 0)
	{
								
		$this->load->model('Customers_model');
		$this->config->set_item('title','Customer Title');//item we are changing and what its changing to
		$data['query']= $this->Customers_model->get_Customers($id);
		
		$this->load->view('customer/default',$data);//titles go into data array
		
		
	}
}
