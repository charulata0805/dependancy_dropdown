<?php
	class Cat_Products_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

public function getAllData()
		{
			$query = $this->db->get('cats');
			return $query->result(); 
			 
		}
		
		public function getAllproduct()
		{
			$query = $this->db->get('products');
			return $query->result(); 
			 
		}
          
		  
		public function getSubcategory($category_id)
          {
              $this->db->where('category_id', $category_id);
			  $this->db->order_by('sub_category', 'ASC');
			  $query = $this->db->get('sub_cats');
			  $output = '<option value="">Select Sub Category</option>';
			  foreach($query->result() as $row)
			  {
			   $output .= '<option value="'.$row->id.'">'.$row->sub_category.'</option>';
			  }
			  return $output;
         }  
		  
		  public function getPprize($product_id)
		  {
			  $this->db->where('id', $product_id);
			  $this->db->order_by('prize', 'ASC');
			  $query = $this->db->get('products');
			   $output = '<option value="">Select Sub Category</option>';
			  foreach($query->result() as $row)
			  {
			   $output .= '<option value="'.$row->prize.'">'.$row->prize.'</option>';
			  }
			  return $output;
		  }	  
	   /* public function getSubcategory($category_id)
	    { 
		    $id=$this->input->post('id',true);
		    echo $id;
			$query = $this->db->get_where('sub_cats',array('category_id'=>$id));
			return $query->result();
			$this->db->where('category_id', $category_id);
			  $this->db->order_by('sub_category', 'ASC');
			  $query = $this->db->get('sub_cats');
			  $output = '<option value="">Select sub_category</option>';
			  foreach($query->result() as $row)
			  {
			   $output .= '<option value="'.$row->id.'">'.$row->sub_category.'</option>';
			  }
			  return $output;
	    }
		
		*/
		public function insertpprize($pr)
		{    //print_r($pr);
			return $this->db->insert('cat_products', $pr);
		}

	

				

	}
?>