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
	public function add()
	{#will create a form for adding customers
		
		$this->load->helper('form');
		$this->config->set_item('title','Add Customer');//item we are changing and what its changing to
		$this->load->view('customer/add');//titles go into data array//REMOVED data
		
		
	}#end add()
	
	public function insert()
	{#will create a form for adding customers
		/*var_dump($_POST);
		die;*/
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('FirstName','First Name','trim|required');
		$this->form_validation->set_rules('LastName','Last Name','trim|required');
		$this->form_validation->set_rules('Email','Email','trim|required|valid_email');
		
		if($this->form_validation->run() == false){//form failed-go back to add
			$this->config->set_item('title','Failed to Add Customer');
			$this->load->view('customer/add');
		}
		else{//insert data
			$this->load->model('Customers_model');
			
			//insert data and return id of entered item
			$id = $this->Customers_model->insert();
			
			//use the id number to load the view of the new customer
			$data['query']= $this->Customers_model->get_Customers($id);
			
			#using custom feedback function to inform user
			feedback('Customer successfully added!','success');
			$this->load->view('customer/view',$data);
		}
		
		$this->config->set_item('title','Add Customer');//item we are changing and what its changing to
		//$this->load->view('customer/add');//titles go into data array//REMOVED data
		
		
	}#end insert()
	
	/*echo '<pre>';
		var_dump($data['query']);
		echo '</pre>';*/
}
