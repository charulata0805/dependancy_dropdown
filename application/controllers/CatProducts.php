<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CatProducts  extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('cat_products_model');
	}

	public function index(){
		
		$this->load->view('cat_list.php');
	}
	  
	public function fetch_subcategory()
	 {
	  if($this->input->post('category_id'))
	    {
	       echo $this->cat_products_model->getSubcategory($this->input->post('category_id'));
	   }
	 }

	 
	 public function fetch_pprize()
	 {
		 if($this->input->post('product_id'))
	    {
	     echo $this->cat_products_model->getPprize($this->input->post('product_id'));
	    } 
	 } 	 
	 
	public function addnew(){
		$data['cats'] = $this->cat_products_model->getAllData();
		//$data['sub_cats']= $this->cat_products_model->getSubcategory();
		$data['product'] = $this->cat_products_model->getAllproduct();
        $this->load->view('catproductform.php',$data);


	}

	public function insert(){
		$pr['category_id'] = $this->input->post('category_id');
		$pr['sub_category_id'] = $this->input->post('sub_category_id');
		$pr['product_id'] = $this->input->post('product_id');
		$pr['prize'] = $this->input->post('prize');
		
		$query = $this->cat_products_model->insertpprize($pr);
           
		if($query){

			header('location:'.base_url().$this->index());
		}

	}

	
}


?>