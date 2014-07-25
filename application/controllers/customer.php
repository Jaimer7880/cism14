<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//customer.php
class Customer extends CI_Controller {

	
	public function index($id = 0)
	{
		
		$this->load->model('Customers_model');
		$this->config->set_item('title','Customer Title');//item we are changing and what its changing to
		$data['query']= $this->Customers_model->get_Customers($id);
		
		$this->load->view('customer/default',$data);//titles go into data array
		
		
	}
	
	public function mylist($id = 0)
	{
		
		$this->load->model('Customers_model');
		$this->config->set_item('title','List of Customers');//item we are changing and what its changing to
		$data['query']= $this->Customers_model->get_Customers($id);
		
		$this->load->view('customer/mylist',$data);//titles go into data array
		
		
	}
	
	public function view($id = 0)
	{
		
		$this->load->model('Customers_model');
		$this->config->set_item('title','Customer Detail');//item we are changing and what its changing to
		$data['query']= $this->Customers_model->get_Customers($id);
		
		$this->load->view('customer/view',$data);//titles go into data array
		
		
	}
	/*echo '<pre>';
		var_dump($data['query']);
		echo '</pre>';*/
}
