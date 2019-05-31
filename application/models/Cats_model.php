<?php
	class Cats_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		public function getAllData(){
			$query = $this->db->get('cats');
			return $query->result(); 
		}

		public function insertcategory($cats){ //operation function add
			return $this->db->insert('cats', $cats);
		}

		public function getCategory($id){
			$query = $this->db->get_where('cats',array('id'=>$id));
			return $query->row_array();
		}

		public function updatecat($cats, $id) {    //operation function edit
			$this->db->where('cats.id', $id);
			return $this->db->update('cats', $cats);
		}

		public function deletecategory($id){   //operation function delete
			$this->db->where('cats.id', $id);
			return $this->db->delete('cats');
		}
		

	}
?>