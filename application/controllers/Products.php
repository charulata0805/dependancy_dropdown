<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('products_model');
	}

	public function index(){
		
		$this->load->view('cat_list.php');
	}

	public function addnew(){
		/*$data['cats'] = $this->products_model->getAllData();
		$data['sub_cats']= $this->products_model->ajax_get_subcategory();
		print_r($data);*/
		$this->load->view('productaddform.php');
	}

	public function insert(){
		$pr['product_name'] = $this->input->post('product_name');
		$pr['prize'] = $this->input->post('prize');
		
		$query = $this->products_model->insertproduct($pr);
           
		if($query){

			header('location:'.base_url().$this->index());
		}

	}

	
}


?>