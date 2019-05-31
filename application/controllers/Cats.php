<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cats extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('cats_model');
	}

	public function index(){
		$data['cats'] = $this->cats_model->getAllData();
		$this->load->view('cat_list.php', $data);
	}

	public function addnew(){
		
		$this->load->view('addform.php');
	}

	public function insert(){
		$cats['category'] = $this->input->post('category');
		
		
		$query = $this->cats_model->insertcategory($cats);
           
		if($query){

			header('location:'.base_url().$this->index());
		}

	}

	public function edit($id){
		$data['cats'] = $this->cats_model->getCategory($id);

		$this->load->view('editform', $data);
	}

	public function update($id){
		$cats['category'] = $this->input->post('category');
		

		$query = $this->cats_model->updatecat($cats, $id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}

	public function delete($id){
		$query = $this->cats_model->deletecategory($id);

		if($query){
			header('location:'.base_url().$this->index());
		}
	}
}


?>