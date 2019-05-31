<?php
	class Products_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		 function getAllData(){
			$query = $this->db->get('products');
			return $query->result(); 
			 
		}
  
		 function insertproduct($pr){ //operation function add
			return $this->db->insert('products', $pr);
		}


				

	}
?>