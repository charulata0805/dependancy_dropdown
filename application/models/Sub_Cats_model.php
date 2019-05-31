<?php
	class Sub_Cats_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllCats(){
			
			$query = $this->db->get('cats');
			return $query->result(); 
			
		}

		public function insertsubcats($subcategory){
			//$query = $this->db->get('sub_users');
			return $this->db->insert('sub_cats', $subcategory);
		}


	}
?>